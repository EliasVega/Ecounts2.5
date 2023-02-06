<?php

namespace App\Http\Controllers;

use App\Models\Pay_invoice;
use App\Http\Requests\StorePayinvoiceRequest;
use App\Http\Requests\UpdatePayinvoiceRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Company;
use App\Models\Indicator;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Pay_event;
use App\Models\Pay_invoice_payment_method;
use App\Models\pay_ncinvoice;
use App\Models\Payment_method;
use App\Models\Sale_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PayinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->role_id;
        if (request()->ajax()) {
            if ($user == 1 || $user == 2) {
                $pay_invoices = Pay_invoice::get();
                /*
                $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
                ->join('customers AS cus', 'inv.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'inv.id AS idI', 'inv.balance', 'inv.totalPay', 'cus.name as nameC', 'pay.created_at')
                ->get();*/
            } else {
                $pay_invoices = Pay_invoice::where('user_id', Auth::user()->id)->get();
                /*
                $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
                ->join('customers AS cus', 'inv.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'inv.id AS idI', 'inv.balance', 'inv.totalPay', 'cus.name as nameC', 'pay.created_at')
                ->where('pay.user_id', '=', Auth::user()->id)
                ->get();*/
            }
            return DataTables::of($pay_invoices)
            ->addIndexColumn()
            ->addColumn('invoice', function (Pay_invoice $invoice) {
                return $invoice->invoice->invoice;
            })
            ->addColumn('total_pay', function (Pay_invoice $payInvoice) {
                return $payInvoice->invoice->total_pay;
            })
            ->addColumn('balance', function (Pay_invoice $payInvoice) {
                return $payInvoice->invoice->balance;
            })
            ->addColumn('customer', function (Pay_invoice $payInvoice) {
                return $payInvoice->invoice->customer->name;
            })
            ->addColumn('branch', function (Pay_invoice $payInvoice) {
                return $payInvoice->branch->name;
            })
            ->addColumn('user', function (Pay_invoice $payInvoice) {
                return $payInvoice->user->name;
            })
            ->editColumn('created_at', function(Pay_invoice $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })

            ->addColumn('btn', 'admin/pay_invoice/actions')
            ->rawcolumns(['btn'])
            ->make(true);
        }
        return view('admin.pay_invoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $banks = Bank::get();
        $payment_methods = Payment_method::get();
        $cards = Card::get();
        $pay_events = Pay_event::where('status', '=', 'PENDIENTE')->get();

        $invoices = Invoice::where('id', $request->session()->get('invoice'))->first();
        /*
        $invoices = Invoice::from('invoices AS inv')
        ->join('customers AS cus', 'inv.customer_id', 'cus.id')
        ->select('inv.id', 'inv.balance', 'cus.name', 'inv.created_at')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->first();*/

        return view('admin.pay_invoice.create', compact('invoices', 'banks', 'payment_methods', 'cards', 'pay_events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayinvoiceRequest $request)
    {
        try{
            DB::beginTransaction();

            $invoice = Invoice::where('id', '=', $request->session()->get('invoice'))->first();
            $balance = $invoice->balance;

            $pay_invoice = new Pay_invoice();
            $pay_invoice->user_id    = Auth::user()->id;
            $pay_invoice->branch_id  = $request->session()->get('branch');
            $pay_invoice->invoice_id = $invoice->id;
            $pay_invoice->pay        = 0;
            $pay_invoice->balance_invoice = 0;
            $pay_invoice->save();

            $cont = 0;
            $payment_method = $request->payment_method_id;
            $bank           = $request->bank_id;
            $card           = $request->card_id;
            $pay_event       = $request->pay_event_id;
            $pay            = $request->pay;
            $transaction    = $request->transaction;
            $payu           = 0;

            while($cont < count($pay)){
                $payment = $pay[$cont];

                $pay_invoice_payment_method = new Pay_invoice_payment_method();
                $pay_invoice_payment_method->pay_invoice_id      = $pay_invoice->id;
                $pay_invoice_payment_method->payment_method_id  = $payment_method[$cont];
                $pay_invoice_payment_method->bank_id            = $bank[$cont];
                $pay_invoice_payment_method->card_id            = $card[$cont];
                $pay_invoice_payment_method->pay_event_id        = null;
                $pay_invoice_payment_method->payment            = $payment;
                $pay_invoice_payment_method->transaction        = $transaction[$cont];
                $pay_invoice_payment_method->save();

                $payu = $payu + $payment;

                $mp = $request->payment_method_id;

                $boxy = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'ABIERTA')
                ->first();
                $in_pay = $boxy->in_pay + $payment;
                $in_pay_cash = $boxy->in_pay_cash;
                $cash = $boxy->cash;
                if($mp == 1){
                    $in_pay_cash += $payment;
                    $cash += $payment;
                }

                $sale_box = Sale_box::findOrFail($boxy->id);
                $sale_box->in_pay_cash = $in_pay_cash;
                $sale_box->in_pay = $in_pay;
                $sale_box->cash = $cash;
                $sale_box->update();

                $cont++;
            }

            $balance = $balance-$payu;

            $invoic = Invoice::findOrFail($invoice->id);
            $invoic->balance = $balance;
            $invoic->update();

            $pay_invoices = Pay_invoice::findOrFail($pay_invoice->id);
            $pay_invoices->pay = $payu;
            $pay_invoices->balance_invoice = $balance;
            $pay_invoices->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('pay_invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
        ->join('users AS use', 'pay.user_id', '=', 'use.id')
        ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
        ->join('invoices AS inv', 'pay.invoice_id', '=', 'inv.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->select('pay.id', 'pay.pay', 'use.name', 'bra.name', 'inv.id AS idI', 'inv.due_date', 'cus.name AS nameC')
        ->where('pay.id', '=', $id)
        ->first();
        $pay_invoice_payment_methods = Pay_invoice_payment_method::from('pay_invoice_payment_methods AS pp')
        ->join('pay_invoices AS pay', 'pp.pay_invoice_id', '=', 'pay.id')
        ->join('payment_methods AS pm', 'pp.payment_method_id', '=', 'pm.id')
        ->join('banks AS ban', 'pp.bank_id', '=', 'ban.id')
        ->join('cards AS car', 'pp.card_id', '=', 'car.id')
        ->select('pay.id', 'pm.name AS nameM', 'ban.name AS nameB', 'car.name AS nameC', 'pp.transaction', 'pp.payment')
        ->where('pay.id', '=', $id)
        ->get();

        return view('admin.pay_invoice.show', compact('pay_invoices', 'pay_invoice_payment_methods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_invoice $pay_invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayinvoiceRequest  $request
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayinvoiceRequest $request, Pay_invoice $pay_invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_invoice $pay_invoice)
    {
        //
    }

    public function pdf_payinvoice(Request $request, $id)
    {
        $payinvoice = Pay_invoice::where('id', $id)->first();
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $payInvoice_paymentMethods = Pay_invoice_payment_method::from('Pay_invoice_payment_methods as pp')
        ->join('payment_methods as pm', 'pp.payment_method_id', 'pm.id')
        ->join('pay_invoices as pi', 'pp.pay_invoice_id', 'pi.id')
        ->select('pm.name', 'pp.transaction', 'pp.payment')
        ->where('pp.pay_invoice_id', $id)
        ->get();
        $payinvoicepdf = "FACT-". $payinvoice->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_invoice.pdf', compact('payInvoice_paymentMethods', 'company', 'logo', 'payinvoice', 'user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$payinvoicepdf.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }
}
