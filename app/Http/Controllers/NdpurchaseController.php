<?php

namespace App\Http\Controllers;

use App\Models\Ndpurchase;
use App\Http\Requests\StoreNdpurchaseRequest;
use App\Http\Requests\UpdateNdpurchaseRequest;
use App\Models\BranchProduct;
use App\Models\Kardex;
use App\Models\NdpurchaseProduct;
use App\Models\Product;
use App\Models\ProductPurchase;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NdpurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $ndpurchases = Ndpurchase::from('ndpurchases as ndp')
            ->join('purchases as pur', 'ndp.purchase_id', 'pur.id')
            ->join('suppliers as sup', 'ndp.supplier_id', 'sup.id')
            ->select('ndp.id', 'ndp.purchase', 'ndp.totalPay', 'ndp.created_at', 'pur.id as idP', 'sup.name')
            ->get();

            return datatables()
            ->of($ndpurchases)
            ->editColumn('created_at', function(Ndpurchase $ndpurchase){
                return $ndpurchase->created_at->format('yy-m-d');
            })
            ->addColumn('edit', 'admin/ndpurchase/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.ndpurchase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $purchases = Purchase::from('purchases AS pur')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->select('pur.id', 'sup.id as idS', 'sup.name', 'pur.purchase', 'pur.total', 'pur.totalIva', 'pur.totalPay', 'pur.status')
        ->where('pur.id', '=', $request->session()->get('purchase'))->first();

        if ($purchases->status == 'DEBIT_NOTE') {
            return redirect("ncpurchase")->with('warning', 'Esta Compra ya tiene una Nota Debito');
        }

        $productPurchases = ProductPurchase::from('product_purchases AS pp')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pp.purchase_id', 'pp.product_id', 'pp.quantity', 'pp.price', 'pro.name', 'pro.stock', 'pro.price AS Rprecio', 'cat.iva')
        ->where('pp.purchase_id', '=', $request->session()->get('purchase'))->get();

        $products = Product::from('products AS pro')
        ->join('product_purchases AS pp', 'pp.product_id', '=', 'pro.id')
        ->select('pro.id', 'pro.name', 'pp.price')
        ->get();


        $cont = 0;
        foreach($productPurchases as $pp){
            $prod = Product::select('stock')->where('id', '=', $pp->product_id)->first();
            if($pp->quantity > $prod->stock){
                $cont ++;
            }
        }

        if($cont == 0){
            return view('admin.ndpurchase.create', compact('purchases', 'products', 'productPurchases'));
        }else{
            return view('admin.ndpurchase.error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNdpurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNdpurchaseRequest $request)
    {
        try{
            DB::beginTransaction();
            $purchase = purchase::where('id', '=', $request->session()->get('purchase'))->first();

            $ndpurchase               = new Ndpurchase();
            $ndpurchase->user_id      = Auth::user()->id;
            $ndpurchase-> branch_id   = $purchase->branch_id;
            $ndpurchase->purchase_id  = $purchase->id;
            $ndpurchase->supplier_id  = $purchase->supplier_id;
            $ndpurchase->purchase     = $purchase->purchase;
            $ndpurchase->total        = $request->total;
            $ndpurchase->totalIva     = $request->totalIva;
            $ndpurchase->totalPay     = $request->totalPay;
            $ndpurchase->save();

            $product_id = $request->product_id;
            $quantity = $request->quantity;
            $price = $request->price;
            $stock = $request->stock;
            $cont = 0;

            while($cont < count($product_id)){

                //Methodo para crear la relacion NC compra con productos
                $ndproductPurchase = new NdpurchaseProduct();
                $ndproductPurchase->ndpurchase_id = $ndpurchase->id;
                $ndproductPurchase->product_id = $product_id[$cont];
                $ndproductPurchase->quantity = $quantity[$cont];
                $ndproductPurchase->price = $price[$cont];
                $ndproductPurchase->save();

                //Metodo para actualizar la estok productos de la sucursal
                $branchProducts = BranchProduct::from('branch_products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.product_id', 'bp.branch_id', 'bp.stock', 'pro.id AS idP', 'bra.id')
                ->where('bp.product_id', '=', $ndproductPurchase->product_id)
                ->where('bp.branch_id', '=', 1)
                ->first();

                $id = $branchProducts->idP;
                $prestock = $branchProducts->stock;
                $stock = $prestock - $ndproductPurchase->quantity;

                $branchProduct = BranchProduct::findOrFail($id);
                $branchProduct->stock = $stock;
                $branchProduct->update();

                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $product_id[$cont])
                ->first();

                $id = $products->id;
                $stockardex = $products->stock;

                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $ndpurchase->branch_id;
                $kardex->operation = 'ND_COMPRA';
                $kardex->number = $ndpurchase->id;
                $kardex->quantity = $quantity[$cont];
                $kardex->stock = $stockardex;
                $kardex->save();

                $cont++;
            }

            $purchase = purchase::findOrFail($purchase->id);
            $purchase->status = 'DEBIT_NOTE';
            $purchase->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('ndpurchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ndpurchase  $ndpurchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ndpurchases = Ndpurchase::from('ndpurchases as ndp')
            ->join('purchases as pur', 'ndp.purchase_id', 'pur.id')
            ->join('suppliers as sup', 'ndp.supplier_id', 'sup.id')
            ->join('branches as bra', 'ndp.branch_id', 'bra.id')
            ->select('ndp.id', 'ndp.purchase', 'ndp.total', 'ndp.totalIva', 'ndp.totalPay', 'ndp.created_at', 'pur.id as idP', 'sup.name', 'bra.name as nameB')
            ->where('ndp.id', '=', $id)
            ->first();

        /*mostrar detalles*/
        $ndpurchaseProducts = NdpurchaseProduct::from('ndpurchase_products AS np')
        ->join('products AS pro', 'np.product_id', '=', 'pro.id')
        ->join('ndpurchases AS nd', 'np.ndpurchase_id', '=', 'nd.id')
        ->select('np.quantity', 'np.price', 'nd.total', 'nd.totalIva', 'nd.totalPay', 'pro.name')
        ->where('np.ndpurchase_id', '=', $id)
        ->get();

        return view('admin.ndpurchase.show', compact('ndpurchases', 'ndpurchaseProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ndpurchase  $ndpurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Ndpurchase $ndpurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNdpurchaseRequest  $request
     * @param  \App\Models\Ndpurchase  $ndpurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNdpurchaseRequest $request, Ndpurchase $ndpurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ndpurchase  $ndpurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ndpurchase $ndpurchase)
    {
        //
    }
}
