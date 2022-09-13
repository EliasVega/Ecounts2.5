<?php

namespace App\Http\Controllers;

use App\Models\NcinvoiceProduct;
use App\Http\Requests\StoreNcinvoiceProductRequest;
use App\Http\Requests\UpdateNcinvoiceProductRequest;

class NcinvoiceProductController extends Controller
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
     * @param  \App\Http\Requests\StoreNcinvoiceProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNcinvoiceProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NcinvoiceProduct  $ncinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function show(NcinvoiceProduct $ncinvoiceProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NcinvoiceProduct  $ncinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(NcinvoiceProduct $ncinvoiceProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNcinvoiceProductRequest  $request
     * @param  \App\Models\NcinvoiceProduct  $ncinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNcinvoiceProductRequest $request, NcinvoiceProduct $ncinvoiceProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NcinvoiceProduct  $ncinvoiceProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(NcinvoiceProduct $ncinvoiceProduct)
    {
        //
    }
}
