<?php

namespace App\Http\Controllers;

use App\Models\Pay_expense;
use App\Http\Requests\StorePay_expenseRequest;
use App\Http\Requests\UpdatePay_expenseRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Discharge_receipt;
use App\Models\Expense;
use App\Models\Expense_service;
use App\Models\Payment_method;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;

class PayExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dischargeReceipts = Discharge_receipt::where('type', 'expense')->get();

            return DataTables::of($dischargeReceipts)

            ->addIndexColumn()
            ->addColumn('pay_expense', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->id;
            })
            ->addColumn('pay', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->pay,2);
            })
            ->addColumn('balance_expense', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->balance_expense,2);
            })
            ->addColumn('branch', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->branch->name;
            })
            ->addColumn('user', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->user->name;
            })
            ->addColumn('expense', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->expense->id;
            })

            ->addColumn('total_pay', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->expense->total_pay,2);
            })
            ->addColumn('supplier', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->expense->supplier->name;
            })

            ->editColumn('created_at', function(Discharge_receipt $dischargeReceipt){
                return $dischargeReceipt->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/pay_expense/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.pay_expense.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banks = Bank::get();
        $payment_methods = Payment_method::get();
        $cards = Card::get();
        $expense = Expense::where('id', '=', $request->session()->get('expense'))->first();
        $payments = Payment::where('status', '!=', 'aplicado')->where('supplier_id', $expense->supplier->id;)->get();

        return view('admin.pay_expense.create', compact('expense', 'banks', 'payment_methods', 'cards', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePay_expenseRequest $request)
    {
        try{
            DB::beginTransaction();
            $expense = Expense::where('id', '=', $request->session()->get('expense'))->first();
            $balance = $expense->balance;
            $total = $request->total;

            $pay_expense = new Pay_expense();
            $pay_expense->user_id    = Auth::user()->id;
            $pay_expense->branch_id  = Auth::user()->branch_id;
            $pay_expense->expense_id = $expense->id;
            $pay_expense->pay        = $total;
            $pay_expense->balance_expense = $balance - $total;
            $pay_expense->save();

            $discharge_receipt = new Discharge_receipt();
            $discharge_receipt->type = 'expense';
            $pay_expense->dischargeReceipt()->save($discharge_receipt);

            $cont = 0;
            $payment_method = $request->payment_method_id;
            $bank           = $request->bank_id;
            $card           = $request->card_id;
            $payment_id     = $request->payment_id;
            $pay            = $request->pay;
            $transaction    = $request->transaction;
            $payu           = $request->payment;
            if ($payu != 0) {
                $payment = Payment::findOrFail( $request->payment_id);
                $payu_total = $payment->balance - $payu;

                $payment->destination = $expense->id;
                if ($payu_total == 0) {
                    $payment->status      = 'aplicado';
                } else {
                    $payment->status      = 'parcial';
                }
                $payment->balance = $payu_total;
                $payment->update();
                $sale_box = Sale_box::where('user_id', '=', $pay_expense->user_id)->where('status', '=', 'open')->first();
                $sale_box->out_payment += $adv;
                $sale_box->update();
            }

            while($cont < count($payment_method)){
                $paymentLine = $request->pay[$cont];
                $pay_expense_payment_method = new Pay_expense_payment_method();
                $pay_expense_payment_method->pay_expense_id      = $pay_expense->id;
                $pay_expense_payment_method->payment_method_id  = $payment_method[$cont];
                $pay_expense_payment_method->bank_id            = $bank[$cont];
                $pay_expense_payment_method->card_id            = $card[$cont];
                if (isset($payment_id[$cont])){
                    $pay_expense_payment_method->payment_id = $payment_id[$cont];
                }
                $pay_expense_payment_method->payment                = $pay[$cont];
                $pay_expense_payment_method->transaction        = $transaction[$cont];
                $pay_expense_payment_method->save();
                $mp = $request->payment_method_id;

                $sale_box = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'open')
                ->first();
                if (isset($sale_box)) {
                    if($mp == 10){
                        $sale_box->out_expense_cash += $paymentLine;
                        $sale_box->departure += $paymentLine;
                    }

                    //$sale_box = Sale_box::findOrFail($boxy->id);
                    $sale_box->out_expense += $paymentLine;
                    $sale_box->out_total += $paymentLine;
                    $sale_box->update();
                }

                $cont++;
            }

            $expens = Expense::findOrFail($expense->id);
            $expens->balance = $balance-$total;
            $expens->update();

            $pay_expenses = Pay_expense::findOrFail($pay_expense->id);
            $pay_expenses->balance_expense = $balance-$total;
            $pay_expenses->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('pay_expense');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay_expense $pay_expense)
    {
        $dischargeReceipt = Discharge_receipt::where('id', $pay_expense->id)->first();
        $payExpense_paymentMethods = Pay_purchase_payment_method::where('pay_purchase_id', $dischargeReceipt->paymentable->id)->get();

        return view('admin.pay_purchase.show', compact('dischargeReceipt', 'payExpense_paymentMethods'));
    }

    public function pdf_pay_expense(Request $request, $id)
    {
        $dischargeReceipt = Discharge_receipt::findOrFail($id);
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $payExpense_PaymentMethods = Pay_expense_payment_method::where('pay_expense_id', $dischargeReceipt->paymentable->id)->get();

        $pdfPayExpense = "ABONO-". $dischargeReceipt->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_expense.pdf', compact('payExpense_PaymentMethods', 'company', 'logo', 'user', 'dischargeReceipt'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$pdfPayExpense.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay_expense $pay_expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePay_expenseRequest $request, Pay_expense $pay_expense): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay_expense $pay_expense)
    {
        //
    }
}
