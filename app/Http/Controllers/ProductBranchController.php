<?php

namespace App\Http\Controllers;

use App\Models\ProductBranch;
use App\Http\Requests\StoreProductBranchRequest;
use App\Http\Requests\UpdateProductBranchRequest;
use App\Models\Branch;
use App\Models\BranchProduct;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $productBranches = ProductBranch::from('product_branches AS pb')
            ->join('users AS use', 'pb.user_id', '=', 'use.id')
            ->join('products AS pro', 'pb.product_id', '=', 'pro.id')
            ->join('branches AS bra', 'pb.branch_id', '=', 'bra.id')
            ->join('branches AS branch', 'pb.originBranch_id', '=', 'branch.id')
            ->select('pb.id', 'pb.quantity', 'pro.name AS nameP', 'bra.name AS nameB', 'pb.created_at', 'branch.name AS originBranch', 'use.name')
            ->get();

            return datatables()
            ->of($productBranches)
            ->editColumn('created_at', function(ProductBranch $productBranch){
                return $productBranch->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('edit', 'admin/productBranch/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.productBranch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $branch = Branch::select('name')->where('id', '=', $request->session()->get('branch'))->first();
        $branches = Branch::select('id', 'name')->where('id', '!=', $request->session()->get('branch'))->get();
        $branchProducts = BranchProduct::from('branch_products AS bp')
        ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
        ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
        ->select('bp.id', 'pro.name', 'bp.stock', 'pro.id AS idP')
        ->where('bp.branch_id', '=', $request->session()->get('branch'))
        ->where('bp.stock', '>', 0)
        ->get();

        return view("admin.productBranch.create", compact('branches', 'branchProducts', 'branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductBranchRequest $request)
    {
        //metodo traslado de productos
        $transfer = new Transfer();
        $transfer->user_id = Auth::user()->id;
        $transfer->branch_id = $request->branch_id[0];
        $transfer->originBranch_id = $request->session()->get('branch');
        $transfer->save();

        try{
            $branch = Branch::select('id')->where('id', '=', $request->session()->get('branch'))->first();
            $branch_id = $request->branch_id[0];
            $product_id = $request->idP;
            $quantity = $request->quantity;
            $originBranch_id = $branch->id;
            $cont = 0;

            //Methodo para asignar productos a la sucursal
            while($cont < count($product_id)){
                $productBranch = new ProductBranch();
                $productBranch->user_id = Auth::user()->id;
                $productBranch->branch_id = $branch_id;
                $productBranch->transfer_id = $transfer->id;
                $productBranch->product_id = $product_id[$cont];
                $productBranch->quantity = $quantity[$cont];
                $productBranch->originBranch_id = $originBranch_id;
                $productBranch->save();

                $branchProducts = BranchProduct::where('product_id', '=', $productBranch->product_id)
                ->where('branch_id', '=', $productBranch->branch_id)
                ->first();

                //methodo para actualizar el stock de la sucursal si existe el producto
                if (isset($branchProducts)) {
                    $id = $branchProducts->id;
                    $stock = $branchProducts->stock + $productBranch->quantity;
                    $branchProduct = BranchProduct::findOrFail($id);
                    $branchProduct->stock = $stock;
                    $branchProduct->update();
                } else {
                    //metodo para crear el producto en la sucursal y asignar stock
                    $branchProduct = new BranchProduct();
                    $branchProduct->branch_id = $productBranch->branch_id;
                    $branchProduct->product_id = $productBranch->product_id;
                    $branchProduct->stock = $productBranch->quantity;
                    $branchProduct->orderProduct = 0;
                    $branchProduct->save();
                }

                $branchPro = BranchProduct::where('product_id', '=', $productBranch->product_id)
                ->where('branch_id', '=', $productBranch->originBranch_id)
                ->first();

                $ids = $branchPro->id;
                $stock = $branchPro->stock - $productBranch->quantity;

                $branchProduct = BranchProduct::findOrFail($ids);
                $branchProduct->stock = $stock;
                $branchProduct->update();

                $cont++;
            }
            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('transfer')->with('success', 'traslado creado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductBranch  $productBranch
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBranch $productBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductBranch  $productBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBranch $productBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductBranchRequest  $request
     * @param  \App\Models\ProductBranch  $productBranch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductBranchRequest $request, ProductBranch $productBranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductBranch  $productBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductBranch $productBranch)
    {
        //
    }
}
