<?php

namespace App\Http\Controllers;

use App\Models\Payinvoice;
use App\Http\Requests\StorePayinvoiceRequest;
use App\Http\Requests\UpdatePayinvoiceRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Invoice;
use App\Models\Payevent;
use App\Models\PayinvoicePaymentmethod;
use App\Models\PaymentMethod;
use App\Models\Salebox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                $payInvoices = Payinvoice::from('payinvoices AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
                ->join('customers AS cus', 'inv.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'inv.id AS idI', 'inv.balance', 'inv.totalPay', 'cus.name as nameC', 'pay.created_at')
                ->get();
            } else {
                $payInvoices = Payinvoice::from('payinvoices AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
                ->join('customers AS cus', 'inv.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'inv.id AS idI', 'inv.balance', 'inv.totalPay', 'cus.name as nameC', 'pay.created_at')
                ->where('pay.user_id', '=', Auth::user()->id)
                ->get();
            }

            return datatables()
            ->of($payInvoices)
            ->editColumn('created_at', function(Payinvoice $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/payInvoice/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.payInvoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $banks = Bank::get();
        $paymentMethods = PaymentMethod::get();
        $cards = Card::get();
        $payEvents = Payevent::where('status', '=', 'PENDIENTE')->get();

        $invoices = Invoice::from('invoices AS inv')
        ->join('customers AS cus', 'inv.customer_id', 'cus.id')
        ->select('inv.id', 'inv.balance', 'cus.name', 'inv.created_at')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->first();

        return view('admin.payInvoice.create', compact('invoices', 'banks', 'paymentMethods', 'cards', 'payEvents'));
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

            $payInvoice = new Payinvoice();
            $payInvoice->user_id    = Auth::user()->id;
            $payInvoice->branch_id  = $request->session()->get('branch');
            $payInvoice->invoice_id = $invoice->id;
            $payInvoice->pay        = 0;
            $payInvoice->balanceInvoice = 0;
            $payInvoice->save();

            $cont = 0;
            $payment_method = $request->payment_method_id;
            $bank           = $request->bank_id;
            $card           = $request->card_id;
            $payEvent       = $request->payEvent_id;
            $pay            = $request->pay;
            $transaction    = $request->transaction;
            $payu           = 0;

            while($cont < count($payment_method)){
                $pay = $pay[$cont];

                $payinvoicePaymentMethod = new PayinvoicePaymentmethod();
                $payinvoicePaymentMethod->payInvoice_id      = $payInvoice->id;
                $payinvoicePaymentMethod->payment_method_id  = $payment_method[$cont];
                $payinvoicePaymentMethod->bank_id            = $bank[$cont];
                $payinvoicePaymentMethod->card_id            = $card[$cont];
                $payinvoicePaymentMethod->payEvent_id        = null;
                $payinvoicePaymentMethod->payment            = $pay;
                $payinvoicePaymentMethod->transaction        = $transaction[$cont];
                $payinvoicePaymentMethod->save();

                $payu = $payu + $pay;

                $mp = $request->payment_method_id;

                $boxy = Salebox::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'ABIERTA')
                ->first();
                $inPay = $boxy->inPay + $pay;
                $inPayCash = $boxy->inPayCash;
                $cash = $boxy->cash;
                if($mp == 1){
                    $inPayCash += $pay;
                    $cash += $pay;
                }

                $salebox = Salebox::findOrFail($boxy->id);
                $salebox->inPayCash = $inPayCash;
                $salebox->inPay = $inPay;
                $salebox->cash = $cash;
                $salebox->update();

                $cont++;
            }

            $balance = $balance-$payu;

            $invoic = Invoice::findOrFail($invoice->id);
            $invoic->balance = $balance;
            $invoic->update();

            $payInvoices = Payinvoice::findOrFail($payInvoice->id);
            $payInvoices->pay = $payu;
            $payInvoices->balanceInvoice = $invoice->balance;
            $payInvoices->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('payInvoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payinvoice  $payinvoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payInvoices = Payinvoice::from('payinvoices AS pay')
        ->join('users AS use', 'pay.user_id', '=', 'use.id')
        ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
        ->join('invoices AS inv', 'pay.invoice_id', '=', 'inv.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->select('pay.id', 'pay.pay', 'use.name', 'bra.name', 'inv.id AS idI', 'inv.due_date', 'cus.name AS nameC')
        ->where('pay.id', '=', $id)
        ->first();
        $payinvoicePaymentMethods = PayinvoicePaymentmethod::from('payinvoice_paymentMethod AS pp')
        ->join('payivoices AS pay', 'pp.payInvoice_id', '=', 'pay.id')
        ->join('payment_methods AS pm', 'pp.payment_method_id', '=', 'pm.id')
        ->join('banks AS ban', 'pp.bank_id', '=', 'ban.id')
        ->join('cards AS car', 'pp.crad_id', '=', 'car.id')
        ->select('pay.id', 'pm.name AS nameM', 'ban.name AS nameB', 'car.name AS nameC', 'pp.transaction', 'pp.payment')
        ->where('pay.id', '=', $id)
        ->get();

        return view('admin.payInvoice.show', compact('payInvoices', 'payinvoicePaymentMethods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payinvoice  $payinvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Payinvoice $payinvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayinvoiceRequest  $request
     * @param  \App\Models\Payinvoice  $payinvoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayinvoiceRequest $request, Payinvoice $payinvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payinvoice  $payinvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payinvoice $payinvoice)
    {
        //
    }
}
