<?php

namespace App\Http\Controllers;

use App\Models\PayinvoicePaymentmethod;
use App\Http\Requests\StorePayinvoicePaymentmethodRequest;
use App\Http\Requests\UpdatePayinvoicePaymentmethodRequest;

class PayinvoicePaymentmethodController extends Controller
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
     * @param  \App\Http\Requests\StorePayinvoicePaymentmethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayinvoicePaymentmethodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayinvoicePaymentmethod  $payinvoicePaymentmethod
     * @return \Illuminate\Http\Response
     */
    public function show(PayinvoicePaymentmethod $payinvoicePaymentmethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayinvoicePaymentmethod  $payinvoicePaymentmethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PayinvoicePaymentmethod $payinvoicePaymentmethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayinvoicePaymentmethodRequest  $request
     * @param  \App\Models\PayinvoicePaymentmethod  $payinvoicePaymentmethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayinvoicePaymentmethodRequest $request, PayinvoicePaymentmethod $payinvoicePaymentmethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayinvoicePaymentmethod  $payinvoicePaymentmethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayinvoicePaymentmethod $payinvoicePaymentmethod)
    {
        //
    }
}
