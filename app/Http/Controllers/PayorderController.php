<?php

namespace App\Http\Controllers;

use App\Models\Payorder;
use App\Http\Requests\StorePayorderRequest;
use App\Http\Requests\UpdatePayorderRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Order;
use App\Models\Payevent;
use App\Models\PaymentMethod;
use App\Models\PaymentmethodPayorder;
use App\Models\Salebox;
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
                $payOrders = Payorder::from('payorders AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('orders AS ord', 'pay.order_id', 'ord.id')
                ->join('customers AS cus', 'ord.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'cus.name as nameC', 'ord.balance', 'ord.totalPay', 'pay.created_at')
                ->get();
            } else {
                $payOrders = Payorder::from('payorders AS pay')
                ->join('users AS use', 'pay.user_id', '=', 'use.id')
                ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
                ->join('orders AS ord', 'pay.order_id', 'ord.id')
                ->join('customers AS cus', 'ord.customer_id', 'cus.id')
                ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'cus.name as nameC', 'ord.balance', 'ord.totalPay', 'pay.created_at')
                ->where('pay.user_id', '=', Auth::user()->id)
                ->get();
            }



            return datatables()
            ->of($payOrders)
            ->editColumn('created_at', function(Payorder $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/payOrder/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.payOrder.index');
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
        $payEvents = Payevent::where('status', '=', 'PENDIENTE');
        $orders = Order::from('orders AS ord')
        ->join('customers AS cus', 'ord.customer_id', 'cus.id')
        ->select('ord.id', 'ord.balance', 'cus.name', 'ord.created_at')
        ->where('ord.id', '=', $request->session()->get('order'))
        ->first();

        return view('admin.payOrder.create', compact('orders', 'banks', 'paymentMethods', 'cards', 'payEvents'));
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

            $payOrder = new Payorder();
            $payOrder->user_id = Auth::user()->id;
            $payOrder->branch_id = $request->session()->get('branch');
            $payOrder->order_id = $order->id;
            $payOrder->pay = 0;
            $payOrder->balanceOrder = 0;
            $payOrder->save();

            $cont = 0;
            $payment_method   = $request->payment_method_id;
            $bank       = $request->bank_id;
            $card     = $request->card_id;
            $payEvent  = $request->payEvent_id;
            $payment       = $request->pay;
            $transaction = $request->transaction;
            $pay     = 0;
            while($cont < count($payment_method)){

                $id = $order->id;
                $payment = $payment[$cont];
                $paymentmethodPayorder                = new PaymentmethodPayorder();
                $paymentmethodPayorder->payOrder_id   = $payOrder->id;
                $paymentmethodPayorder->payment_method_id  = $payment_method[$cont];
                $paymentmethodPayorder->bank_id      = $bank[$cont];
                $paymentmethodPayorder->card_id    = $card[$cont];
                $paymentmethodPayorder->payEvent_id = null;
                $paymentmethodPayorder->payment         = $payment;
                $paymentmethodPayorder->transaction   = $transaction[$cont];
                $paymentmethodPayorder->save();

                $payu = $pay + $payment;

                $mp = $request->payment_method_id;
                $boxy = Salebox::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'ABIERTA')
                ->first();
                //$cajita = Caja::findOrFail($id);
                $inPay = $boxy->inPay + $payment;
                $inPayCash = $boxy->inPayCash;
                $cash = $boxy->cash;
                if($mp == 1){
                    $inPayCash += $payment;
                    $cash += $payment;
                }

                $salebox = Salebox::findOrFail($boxy->id);
                $salebox->inPayCash = $inPayCash;
                $salebox->inPay = $inPay;
                $salebox->cash = $cash;
                $salebox->update();

                $cont++;
            }

            $balanc = $balance-$payu;

            $order = Order::findOrFail($order->id);
            $order->balance = $balanc;
            $order->update();

            $payOrders = Payorder::findOrFail($payOrder->id);
            $payOrders->pay = $payu;
            $payOrders->balanceOrder = $balanc;
            $payOrders->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('payOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payorder  $payorder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payOrders = Payorder::from('payorders AS pay')
        ->join('users AS use', 'pay.user_id', '=', 'use.id')
        ->join('branches AS bra', 'pay.branch_id', '=', 'bra.id')
        ->join('orders AS ord', 'pay.order_id', '=', 'ord.id')
        ->join('customers as cus', 'ord.customer_id', 'cus.id')
        ->select('pay.id', 'pay.pay', 'use.name', 'bra.name as nameB', 'ord.id AS idO', 'ord.due_date', 'cus.name as nameC')
        ->where('pay.id', '=', $id)
        ->first();
        $paymentmethodPayorders = PaymentmethodPayorder::from('paymentmethod_payorders AS pp')
        ->join('payorders AS pay', 'pp.payOrder_id', '=', 'pay.id')
        ->join('payment_methods AS pm', 'pp.payment_method_id', '=', 'pm.id')
        ->join('banks AS ban', 'pp.bank_id', '=', 'ban.id')
        ->join('cards AS car', 'pp.card_id', '=', 'car.id')
        ->select('pay.id', 'pm.name AS namePM', 'ban.name AS nameB', 'car.name AS nameC', 'pp.transaction', 'pp.payment')
        ->where('pay.id', '=', $id)
        ->get();

        return view('admin.payOrder.show', compact('payOrders', 'paymentmethodPayorders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payorder  $payorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Payorder $payorder)
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
    public function update(UpdatePayorderRequest $request, Payorder $payorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payorder  $payorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payorder $payorder)
    {
        //
    }
}
