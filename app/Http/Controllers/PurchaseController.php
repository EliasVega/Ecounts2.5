<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorepurchaseRequest;
use App\Http\Requests\UpdatepurchaseRequest;
use App\Models\BranchProduct;
use App\Models\Department;
use App\Models\Document;
use App\Models\Kardex;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Product;
use App\Models\ProductPurchase;
use App\Models\Supplier;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            //Muestra todas las compras de la empresa
            $purchases = Purchase::from('purchases AS pur')
            ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
            ->join('users AS use', 'pur.user_id', '=', 'use.id')
            ->select('pur.id', 'sup.name as nameS', 'pur.purchase', 'pur.totalPay', 'pur.created_at', 'pur.status', 'use.name')
            ->get();

            return datatables()
            ->of($purchases)
            ->editColumn('created_at', function(Purchase $purchase){
                return $purchase->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/purchase/actions')
            ->rawColumns(['btn'])
            ->toJson();
        }
        return view('admin.purchase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $taxes = Tax::get();
        $suppliers = Supplier::get();
        $products = Product::from('products AS pro')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pro.name', 'pro.salePrice', 'pro.stock', 'cat.iva', 'pro.price')
        ->where('pro.status', '=', 'ACTIVE')
        ->get();

        //$productos = Producto::where('estado', "=", '1')->get();
        return view('admin.purchase.create', compact('suppliers', 'products', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseRequest $request)
    {
        try{
            DB::beginTransaction();
            //Crea un registro de compras
            $purchase = new Purchase();
            $purchase->user_id     = Auth::user()->id;
            $purchase->branch_id   = 1;
            $purchase->supplier_id = $request->supplier_id;
            $purchase->purchase    = $request->purchase;
            $purchase->total       = $request->total;
            $purchase->totalIva    = $request->totalIva;
            $purchase->totalPay    = $request->totalPay;
            $purchase->status      = 'ACTIVE';
            $purchase->save();
            //Toma el Request del array
            $product_id = $request->product_id;
            $quantity = $request->quantity;
            $price = $request->price;
            $cont = 0;
            //Ingresa los productos que vienen en el array
            while($cont < count($product_id)){
                $productpurchase = new ProductPurchase();
                $productpurchase->purchase_id   = $purchase->id;
                $productpurchase->product_id = $product_id[$cont];
                $productpurchase->quantity    = $quantity[$cont];
                $productpurchase->price      = $price[$cont];
                $productpurchase->save();
                //selecciona el producto que viene del array
                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $productpurchase->product_id)
                ->first();

                $id = $products->id;
                $uti = $products->utility;
                $pre = $products->price;
                $stockardex = $products->stock;
                $preven = $pre + ($pre * $uti / 100);
                //Cambia el valor del venta del producto
                $product = Product::findOrFail($id);
                $product->salePrice = $preven;
                $product->update();
                //selecciona el producto de la sucursal que se el mismo del array
                $branchProducts = BranchProduct::from('branch_products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.product_id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'bra.id')
                ->where('bp.product_id', '=', $productpurchase->product_id)
                ->where('bp.branch_id', '=', 1)
                ->first();

                $id = $branchProducts->idP;
                $prestock = $branchProducts->stock;
                $stock = $prestock + $productpurchase->quantity;
                //Ingresa la cantidad de ese producto a la sucursal Bodega
                $branchProduct = BranchProduct::findOrFail($id);
                $branchProduct->stock = $stock;
                $branchProduct->update();

                //Actualiza la tabla del Kardex
                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $purchase->branch_id;
                $kardex->operation = 'COMPRA';
                $kardex->number = $purchase->id;
                $kardex->quantity = $quantity[$cont];
                $kardex->stock = $stockardex;
                $kardex->save();


                $cont++;
            }
            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchases = Purchase::from('purchases AS pur')
        ->join('branches AS bra', 'pur.branch_id', '=', 'bra.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->select('pur.id', 'pur.total', 'pur.totalIva', 'pur.totalPay', 'pur.created_at', 'bra.name as nameB', 'sup.name')
        ->where('pur.id', '=', $id)
        ->first();

        /*mostrar detalles*/
        $productPurchases = ProductPurchase::from('product_purchases AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->select('pp.quantity', 'pp.price', 'pur.total', 'pur.totalIva', 'pur.totalPay', 'pro.name')
        ->where('pp.purchase_id', '=', $id)
        ->get();

        return view('admin.purchase.show', compact('purchases', 'productPurchases'));
    }

    public function showncPurchase($id)
     {
        $purchase = Purchase::findOrFail($id);
        \session()->put('purchase', $purchase->id, 60 * 24 * 365);
        \session()->put('supplier_id', $purchase->supplier_id, 60 * 24 *365);
        \session()->put('purchase', $purchase->purchase, 60 * 24 *365);
        \session()->put('iva', $purchase->iva, 60 * 24 *365);
        \session()->put('total', $purchase->total, 60 * 24 *365);
        \session()->put('status', $purchase->status, 60 * 24 *365);

        if ($purchase->status != 'ACTIVE') {
            return redirect("purchase")->with('warning', 'Esta Compra ya tiene una Nota Credito');
        } else {
            return redirect('ncpurchase/create');
        }
     }

     public function showndPurchase($id)
     {
        $purchase = Purchase::findOrFail($id);
        \session()->put('purchase', $purchase->id, 60 * 24 * 365);
        \session()->put('supplier_id', $purchase->supplier_id, 60 * 24 *365);
        \session()->put('purchase', $purchase->purchase, 60 * 24 *365);
        \session()->put('iva', $purchase->iva, 60 * 24 *365);
        \session()->put('total', $purchase->total, 60 * 24 *365);
        \session()->put('status', $purchase->status, 60 * 24 *365);

        if ($purchase->status != 'ACTIVE') {
            return redirect("purchase")->with('warning', 'Esta Compra ya tiene una Nota Debito');
        } else {
            return redirect('ndpurchase/create');
        }


     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepurchaseRequest  $request
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->estado = 'CREDIT_NOTE';
        $purchase->save();
        return redirect('purchase');
    }

    public function getMunicipalities(Request $request, $id)
    {
        if($request)
        {
            $municipalities = Municipality::where('department_id', '=', $id)->get();

            return response()->json($municipalities);
        }
    }
}
