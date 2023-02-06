<?php

namespace App\Http\Controllers;

use App\Models\Pay_purchase;
use App\Http\Requests\StorePay_purchaseRequest;
use App\Http\Requests\UpdatePay_purchaseRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Pay_purchase_payment_method;
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
    public function index()
    {
        $user = Auth::user()->role_id;
        if (request()->ajax()) {
            if ($user == 1 || $user == 2) {
                $pay_purchases = Pay_purchase::get();
            } else {
                $pay_purchases = Pay_purchase::where('user_id', Auth::user()->id)->get();
            }
            return DataTables::of($pay_purchases)
            ->addIndexColumn()
            ->addColumn('purchase', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->purchase->purchase;
            })
            ->addColumn('total_pay', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->purchase->total_pay;
            })
            ->addColumn('balance', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->purchase->balance;
            })
            ->addColumn('supplier', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->purchase->supplier->name;
            })
            ->addColumn('branch', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->branch->name;
            })
            ->addColumn('user', function (Pay_purchase $pay_purchase) {
                return $pay_purchase->user->name;
            })
            ->editColumn('created_at', function(Pay_purchase $pay_purchase){
                return $pay_purchase->created_at->format('yy-m-d: h:m');
            })

            ->addColumn('btn', 'admin/pay_purchase/actions')
            ->rawcolumns(['btn'])
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

        $purchases = Purchase::where('id', '=', $request->session()->get('purchase'))->first();

        return view('admin.pay_purchase.create', compact('purchases', 'banks', 'payment_methods', 'cards'));
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

            $pay_purchase = new Pay_purchase();
            $pay_purchase->user_id    = Auth::user()->id;
            $pay_purchase->branch_id  = $request->session()->get('branch');
            $pay_purchase->purchase_id = $purchase->id;
            $pay_purchase->pay        = 0;
            $pay_purchase->balance_purchase = 0;
            $pay_purchase->save();

            $cont = 0;
            $payment_method = $request->payment_method_id;
            $bank           = $request->bank_id;
            $card           = $request->card_id;
            $pay            = $request->pay;
            $transaction    = $request->transaction;
            $payu           = 0;
            while($cont < count($payment_method)){
                $pay = $pay[$cont];

                $pay_purchase_payment_method = new Pay_purchase_payment_method();
                $pay_purchase_payment_method->pay_purchase_id      = $pay_purchase->id;
                $pay_purchase_payment_method->payment_method_id  = $payment_method[$cont];
                $pay_purchase_payment_method->bank_id            = $bank[$cont];
                $pay_purchase_payment_method->card_id            = $card[$cont];
                $pay_purchase_payment_method->payment                = $pay;
                $pay_purchase_payment_method->transaction        = $transaction[$cont];
                $pay_purchase_payment_method->save();

                $payu = $payu + $pay;

                $mp = $request->payment_method_id;

                $boxy = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'ABIERTA')
                ->first();
                $in_pay = $boxy->in_pay + $pay;
                $in_pay_cash = $boxy->in_pay_cash;
                $cash = $boxy->cash;
                if($mp == 1){
                    $in_pay_cash += $pay;
                    $cash += $pay;
                }

                $sale_box = Sale_box::findOrFail($boxy->id);
                $sale_box->in_pay_cash = $in_pay_cash;
                $sale_box->in_pay = $in_pay;
                $sale_box->cash = $cash;
                $sale_box->update();

                $cont++;
            }

            $balancey = $balance-$payu;

            $purchase = purchase::findOrFail($purchase->id);
            $purchase->balance = $balancey;
            $purchase->update();

            $pay_purchases = Pay_purchase::findOrFail($pay_purchase->id);
            $pay_purchases->pay = $payu;
            $pay_purchases->balance_purchase = $purchase->balance;
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
    public function show(Pay_purchase $id)
    {
        $pay_purchases = Pay_purchase::from('pay_purchases AS pay')
        ->join('users AS use', 'pay.user_id', '=', 'use.id')
        ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
        ->join('purchases AS pur', 'pay.purchase_id', '=', 'pur.id')
        ->join('suppliers AS pur', 'pur.supplier_id', '=', 'pur.id')
        ->select('pay.id', 'pay.pay', 'use.name', 'bra.name', 'pur.id AS idI', 'pur.due_date', 'pur.name AS nameC')
        ->where('pay.id', '=', $id)
        ->first();
        $pay_purchase_payment_methods = Pay_purchase_payment_method::from('pay_purchase_payment_methods AS pp')
        ->join('pay_ivoices AS pay', 'pp.pay_purchase_id', '=', 'pay.id')
        ->join('payment_methods AS pm', 'pp.payment_method_id', '=', 'pm.id')
        ->join('banks AS ban', 'pp.bank_id', '=', 'ban.id')
        ->join('cards AS car', 'pp.crad_id', '=', 'car.id')
        ->select('pay.id', 'pm.name AS nameM', 'ban.name AS nameB', 'car.name AS nameC', 'pp.transaction', 'pp.payment')
        ->where('pay.id', '=', $id)
        ->get();

        return view('admin.pay_purchase.show', compact('pay_purchases', 'pay_purchase_payment_methods'));
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
