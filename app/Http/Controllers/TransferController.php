<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Http\Requests\StoreTransferRequest;
use App\Http\Requests\UpdateTransferRequest;
use App\Models\Product_branch;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $transfers = Transfer::from('transfers AS tra')
            ->join('users AS use', 'tra.user_id', '=', 'use.id')
            ->join('branches AS bra', 'tra.branch_id', '=', 'bra.id')
            ->join('branches AS branch', 'tra.origin_branch_id', '=', 'branch.id')
            ->select('tra.id', 'branch.name AS origin_branch', 'bra.name AS branch', 'tra.created_at', 'use.name')
            ->get();

            return datatables()
            ->of($transfers)
            ->editColumn('created_at', function(Transfer $transfer){
                return $transfer->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/transfer/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.transfer.index');
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
     * @param  \App\Http\Requests\StoreTransferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transfers = transfer::from('transfers AS tra')
            ->join('users AS use', 'tra.user_id', '=', 'use.id')
            ->join('branches AS bra', 'tra.branch_id', '=', 'bra.id')
            ->join('branches AS branch', 'tra.origin_branch_id', '=', 'branch.id')
            ->select('tra.id', 'branch.name AS origin_branch', 'bra.name AS branch', 'tra.created_at', 'use.name')
            ->where('tra.id', '=', $id)
            ->first();
        $product_branches = Product_branch::from('product_branches AS pb')
            ->join('users AS use', 'pb.user_id', '=', 'use.id')
            ->join('products AS pro', 'pb.product_id', '=', 'pro.id')
            ->join('transfers AS tra', 'pb.transfer_id', '=', 'tra.id')
            ->join('branches AS bra', 'pb.branch_id', '=', 'bra.id')
            ->join('branches AS branch', 'pb.origin_branch_id', '=', 'branch.id')
            ->select('pb.id', 'pb.quantity', 'pb.branch_id', 'pro.name AS nameP', 'bra.name AS nameB', 'pb.created_at', 'branch.name AS origin_branch', 'use.name', 'tra.id AS idT')
            ->where('tra.id', '=', $id)
            ->get();

            return view('admin.transfer.show', compact('product_branches', 'transfers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransferRequest  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransferRequest $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        //
    }
}
