<?php

namespace App\Http\Controllers;

use App\Models\NdinvoiceProduct;
use App\Http\Requests\StoreNdinvoiceProductRequest;
use App\Http\Requests\UpdateNdinvoiceProductRequest;

class NdinvoiceProductController extends Controller
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
     * @param  \App\Http\Requests\StoreNdinvoiceProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNdinvoiceProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NdinvoiceProduct  $ndinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function show(NdinvoiceProduct $ndinvoiceProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NdinvoiceProduct  $ndinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(NdinvoiceProduct $ndinvoiceProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNdinvoiceProductRequest  $request
     * @param  \App\Models\NdinvoiceProduct  $ndinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNdinvoiceProductRequest $request, NdinvoiceProduct $ndinvoiceProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NdinvoiceProduct  $ndinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(NdinvoiceProduct $ndinvoiceProduct)
    {
        //
    }
}
