<?php

namespace App\Http\Controllers;

use App\Models\PaymentmethodPayorder;
use App\Http\Requests\StorePaymentmethodPayorderRequest;
use App\Http\Requests\UpdatePaymentmethodPayorderRequest;

class PaymentmethodPayorderController extends Controller
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
     * @param  \App\Http\Requests\StorePaymentmethodPayorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentmethodPayorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentmethodPayorder  $paymentmethodPayorder
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentmethodPayorder $paymentmethodPayorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentmethodPayorder  $paymentmethodPayorder
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentmethodPayorder $paymentmethodPayorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentmethodPayorderRequest  $request
     * @param  \App\Models\PaymentmethodPayorder  $paymentmethodPayorder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentmethodPayorderRequest $request, PaymentmethodPayorder $paymentmethodPayorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentmethodPayorder  $paymentmethodPayorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentmethodPayorder $paymentmethodPayorder)
    {
        //
    }
}
