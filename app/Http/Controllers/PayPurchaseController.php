<?php

namespace App\Http\Controllers;

use App\Models\Pay_purchase;
use App\Http\Requests\StorePay_purchaseRequest;
use App\Http\Requests\UpdatePay_purchaseRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Company;
use App\Models\Discharge_receipt;
use App\Models\Pay_purchase_payment_method;
use App\Models\Payment;
use App\Models\Payment_method;
use App\Models\Purchase;
use App\Models\Sale_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PayPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dischargeReceipts = Discharge_receipt::where('type', 'purchase')->get();

            return DataTables::of($dischargeReceipts)

            ->addIndexColumn()
            ->addColumn('pay_purchase', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->id;
            })
            ->addColumn('pay', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->pay,2);
            })
            ->addColumn('balance_purchase', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->balance_purchase,2);
            })
            ->addColumn('branch', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->branch->name;
            })
            ->addColumn('user', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->user->name;
            })
            ->addColumn('purchase', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->purchase->id;
            })

            ->addColumn('total_pay', function (Discharge_receipt $dischargeReceipt) {
                return number_format($dischargeReceipt->paymentable->purchase->total_pay,2);
            })
            ->addColumn('supplier', function (Discharge_receipt $dischargeReceipt) {
                return $dischargeReceipt->paymentable->purchase->supplier->name;
            })

            ->editColumn('created_at', function(Discharge_receipt $dischargeReceipt){
                return $dischargeReceipt->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/pay_purchase/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.pay_purchase.index');

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
        $purchase = Purchase::where('id', '=', $request->session()->get('purchase'))->first();
        $supp = $purchase->supplier->id;
        $payments = Payment::where('status', '!=', 'aplicado')->where('supplier_id', $supp)->get();

        return view('admin.pay_purchase.create', compact('purchase', 'banks', 'payment_methods', 'cards', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePay_purchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePay_purchaseRequest $request)
    {
        try{
            DB::beginTransaction();
            $purchase = purchase::where('id', '=', $request->session()->get('purchase'))->first();
            $balance = $purchase->balance;
            $total = $request->total;

            $pay_purchase = new Pay_purchase();
            $pay_purchase->user_id    = Auth::user()->id;
            $pay_purchase->branch_id  = Auth::user()->branch_id;
            $pay_purchase->purchase_id = $purchase->id;
            $pay_purchase->pay        = $total;
            $pay_purchase->balance_purchase = $balance - $total;
            $pay_purchase->save();

            $discharge_receipt = new Discharge_receipt();
            $discharge_receipt->type = 'purchase';
            $pay_purchase->dischargeReceipt()->save($discharge_receipt);

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

                $payment->destination = $purchase->id;
                if ($payu_total == 0) {
                    $payment->status      = 'aplicado';
                } else {
                    $payment->status      = 'parcial';
                }
                $payment->balance = $payu_total;
                $payment->update();
            }

            while($cont < count($payment_method)){
                $paymentLine = $request->pay[$cont];
                $pay_purchase_payment_method = new Pay_purchase_payment_method();
                $pay_purchase_payment_method->pay_purchase_id      = $pay_purchase->id;
                $pay_purchase_payment_method->payment_method_id  = $payment_method[$cont];
                $pay_purchase_payment_method->bank_id            = $bank[$cont];
                $pay_purchase_payment_method->card_id            = $card[$cont];
                if (isset($payment_id[$cont])){
                    $pay_purchase_payment_method->payment_id = $payment_id[$cont];
                }
                $pay_purchase_payment_method->payment                = $pay[$cont];
                $pay_purchase_payment_method->transaction        = $transaction[$cont];
                $pay_purchase_payment_method->save();
                $mp = $request->payment_method_id;

                $sale_box = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'open')
                ->first();
                if (isset($sale_box)) {
                    $out = $sale_box->out;
                    if($mp == 10){
                        $sale_box->out_urchase_cash += $paymentLine;
                        $out += $paymentLine;
                    }

                    //$sale_box = Sale_box::findOrFail($boxy->id);
                    $sale_box->out_purchase += $paymentLine;
                    $out = $out;
                    $sale_box->update();
                }

                $cont++;
            }

            $purchas = purchase::findOrFail($purchase->id);
            $purchas->balance = $balance-$total;
            $purchas->update();

            $pay_purchases = Pay_purchase::findOrFail($pay_purchase->id);
            $pay_purchases->balance_purchase = $balance-$total;
            $pay_purchases->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('pay_purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay_purchase  $pay_purchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dischargeReceipt = Discharge_receipt::where('id', $id)->first();
        $payPurchase_paymentMethods = Pay_purchase_payment_method::where('pay_purchase_id', $dischargeReceipt->paymentable->id)->get();

        return view('admin.pay_purchase.show', compact('dischargeReceipt', 'payPurchase_paymentMethods'));
    }

    public function pdf_pay_purchase(Request $request, $id)
    {
        $dischargeReceipt = Discharge_receipt::findOrFail($id);
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $payPurchase_PaymentMethods = Pay_purchase_payment_method::where('pay_purchase_id', $dischargeReceipt->paymentable->id)->get();

        $pdfPayPurchase = "ABONO-". $dischargeReceipt->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_purchase.pdf', compact('payPurchase_PaymentMethods', 'company', 'logo', 'user', 'dischargeReceipt'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$pdfPayPurchase.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_purchase  $pay_purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_purchase $pay_purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePay_purchaseRequest  $request
     * @param  \App\Models\Pay_purchase  $pay_purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePay_purchaseRequest $request, Pay_purchase $pay_purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay_purchase  $pay_purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_purchase $pay_purchase)
    {
        //
    }
}
