<?php

namespace App\Http\Controllers;

use App\Models\Branch_product;
use App\Http\Requests\StoreBranchProductRequest;
use App\Http\Requests\UpdateBranchProductRequest;
use Illuminate\Http\Request;

class BranchProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            //Mostrar los productos de una sucursal especifica
            $branch_products = Branch_product::from('branch_products AS bp')
            ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
            ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
            ->select('pro.id', 'pro.code', 'pro.name', 'pro.sale_price', 'bp.stock', 'bp.order_product', 'pro.status')
            ->where('bra.id', '=', $request->session()->get('branch'))
            ->where('pro.status', '=', 'ACTIVE')
            ->get();

            return datatables()
            ->of($branch_products)
            ->toJson();
        }
        return view('admin.branch_product.index');
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
     * @param  \App\Http\Requests\StoreBranchProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch_product  $Branch_product
     * @return \Illuminate\Http\Response
     */
    public function show(Branch_product $Branch_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch_product  $Branch_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch_product $Branch_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchProductRequest  $request
     * @param  \App\Models\Branch_product  $Branch_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchProductRequest $request, Branch_product $Branch_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch_product  $Branch_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch_product $Branch_product)
    {
        //
    }
}
