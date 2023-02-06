<?php

namespace App\Http\Controllers;

use App\Models\Payment_payment_method;
use App\Http\Requests\StorePayment_payment_methodRequest;
use App\Http\Requests\UpdatePayment_payment_methodRequest;

class PaymentPaymentMethodController extends Controller
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
     * @param  \App\Http\Requests\StorePayment_payment_methodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment_payment_methodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_payment_method  $payment_payment_method
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_payment_method $payment_payment_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_payment_method  $payment_payment_method
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_payment_method $payment_payment_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayment_payment_methodRequest  $request
     * @param  \App\Models\Payment_payment_method  $payment_payment_method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayment_payment_methodRequest $request, Payment_payment_method $payment_payment_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_payment_method  $payment_payment_method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_payment_method $payment_payment_method)
    {
        //
    }
}
