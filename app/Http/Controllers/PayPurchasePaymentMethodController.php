<?php

namespace App\Http\Controllers;

use App\Models\Pay_purchase_payment_method;
use App\Http\Requests\StorePay_purchase_payment_methodRequest;
use App\Http\Requests\UpdatePay_purchase_payment_methodRequest;

class PayPurchasePaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePay_purchase_payment_methodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePay_purchase_payment_methodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay_purchase_payment_method  $pay_purchase_payment_method
     * @return \Illuminate\Http\Response
     */
    public function show(Pay_purchase_payment_method $pay_purchase_payment_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_purchase_payment_method  $pay_purchase_payment_method
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_purchase_payment_method $pay_purchase_payment_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePay_purchase_payment_methodRequest  $request
     * @param  \App\Models\Pay_purchase_payment_method  $pay_purchase_payment_method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePay_purchase_payment_methodRequest $request, Pay_purchase_payment_method $pay_purchase_payment_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay_purchase_payment_method  $pay_purchase_payment_method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_purchase_payment_method $pay_purchase_payment_method)
    {
        //
    }
}
