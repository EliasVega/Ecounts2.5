<?php

namespace App\Http\Controllers;

use App\Models\InvoiceProduct;
use App\Http\Requests\StoreInvoiceProductRequest;
use App\Http\Requests\UpdateInvoiceProductRequest;

class InvoiceProductController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceProduct  $invoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceProduct $invoiceProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceProduct  $invoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceProduct $invoiceProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceProductRequest  $request
     * @param  \App\Models\InvoiceProduct  $invoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceProductRequest $request, InvoiceProduct $invoiceProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceProduct  $invoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceProduct $invoiceProduct)
    {
        //
    }
}
