<?php

namespace App\Http\Controllers;

use App\Models\Pay_order;
use App\Http\Requests\StorePayorderRequest;
use App\Http\Requests\UpdatePayorderRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Order;
use App\Models\Pay_event;
use App\Models\Payment_method;
use App\Models\Pay_order_payment_method;
use App\Models\Sale_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayorderController extends Controller
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
                $pay_orders = Pay_order::from('pay_orders AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('orders AS ord', 'pay.order_id', 'ord.id')
                ->join('customers AS cus', 'ord.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'cus.name as nameC', 'ord.balance', 'ord.total_pay', 'pay.created_at')
                ->get();
            } else {
                $pay_orders = Pay_order::from('pay_orders AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('orders AS ord', 'pay.order_id', 'ord.id')
                ->join('customers AS cus', 'ord.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'cus.name as nameC', 'ord.balance', 'ord.total_pay', 'pay.created_at')
                ->where('pay.user_id', '=', Auth::user()->id)
                ->get();
            }



            return datatables()
            ->of($pay_orders)
            ->editColumn('created_at', function(Pay_order $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/pay_order/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.pay_order.index');
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
        $pay_events = Pay_event::where('status', '=', 'PENDIENTE');
        $orders = Order::from('orders AS ord')
        ->join('customers AS cus', 'ord.customer_id', 'cus.id')
        ->select('ord.id', 'ord.balance', 'cus.name', 'ord.created_at')
        ->where('ord.id', '=', $request->session()->get('order'))
        ->first();

        return view('admin.pay_order.create', compact('orders', 'banks', 'payment_methods', 'cards', 'pay_events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayorderRequest $request)
    {
        try{
            DB::beginTransaction();

            $order = Order::where('id', '=', $request->session()->get('order'))->first();
            $balance = $order->balance;

            $pay_order = new Pay_order();
            $pay_order->user_id = Auth::user()->id;
            $pay_order->branch_id = $request->session()->get('branch');
            $pay_order->order_id = $order->id;
            $pay_order->pay = 0;
            $pay_order->balance_order = 0;
            $pay_order->save();

            $cont = 0;
            $payment_method   = $request->payment_method_id;
            $bank       = $request->bank_id;
            $card     = $request->card_id;
            $pay_event  = $request->pay_event_id;
            $payment       = $request->pay;
            $transaction = $request->transaction;
            $pay     = 0;
            while($cont < count($payment_method)){

                $id = $order->id;
                $payment = $payment[$cont];
                $pay_order_payment_method                = new Pay_order_payment_method();
                $pay_order_payment_method->pay_order_id   = $pay_order->id;
                $pay_order_payment_method->payment_method_id  = $payment_method[$cont];
                $pay_order_payment_method->bank_id      = $bank[$cont];
                $pay_order_payment_method->card_id    = $card[$cont];
                $pay_order_payment_method->pay_event_id = null;
                $pay_order_payment_method->payment         = $payment;
                $pay_order_payment_method->transaction   = $transaction[$cont];
                $pay_order_payment_method->save();

                $payu = $pay + $payment;

                $mp = $request->payment_method_id;
                $boxy = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'ABIERTA')
                ->first();
                //$cajita = Caja::findOrFail($id);
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

            $balanc = $balance-$payu;

            $order = Order::findOrFail($order->id);
            $order->balance = $balanc;
            $order->update();

            $pay_orders = Pay_order::findOrFail($pay_order->id);
            $pay_orders->pay = $payu;
            $pay_orders->balance_order = $balanc;
            $pay_orders->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('pay_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay_order  $pay_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_orders = Pay_order::from('pay_orders AS pay')
        ->join('users AS use', 'pay.user_id', '=', 'use.id')
        ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
        ->join('orders AS ord', 'pay.order_id', '=', 'ord.id')
        ->join('customers as cus', 'ord.customer_id', 'cus.id')
        ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'ord.due_date', 'cus.name as nameC')
        ->where('pay.id', '=', $id)
        ->first();
        $pay_order_payment_methods = Pay_order_payment_method::from('pay_order_payment_methods AS pp')
        ->join('pay_orders AS pay', 'pp.pay_order_id', '=', 'pay.id')
        ->join('payment_methods AS pm', 'pp.payment_method_id', '=', 'pm.id')
        ->join('banks AS ban', 'pp.bank_id', '=', 'ban.id')
        ->join('cards AS car', 'pp.card_id', '=', 'car.id')
        ->select('pay.id', 'pm.name AS namePM', 'ban.name AS nameB', 'car.name AS nameC', 'pp.transaction', 'pp.payment')
        ->where('pay.id', '=', $id)
        ->get();

        return view('admin.pay_order.show', compact('pay_orders', 'pay_order_payment_methods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_order  $pay_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_order $pay_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayorderRequest  $request
     * @param  \App\Models\Payorder  $payorder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayorderRequest $request, Pay_order $pay_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payorder  $payorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_order $pay_order)
    {
        //
    }
}
