<?php

namespace App\Http\Controllers;

use App\Models\Ndpurchase;
use App\Http\Requests\StoreNdpurchaseRequest;
use App\Http\Requests\UpdateNdpurchaseRequest;
use App\Models\Branch_product;
use App\Models\Kardex;
use App\Models\Nc_discrepancy;
use App\Models\Ncpurchase_product;
use App\Models\Ndpurchase_product;
use App\Models\Product;
use App\Models\Product_purchase;
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
            ->select('ndp.id', 'ndp.purchase', 'ndp.total_pay', 'ndp.created_at', 'pur.id as idP', 'sup.name')
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
        ->select('pur.id', 'sup.id as idS', 'sup.name', 'pur.purchase', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pur.status')
        ->where('pur.id', '=', $request->session()->get('purchase'))->first();

        if ($purchases->status == 'DEBIT_NOTE') {
            return redirect("ncpurchase")->with('warning', 'Esta Compra ya tiene una Nota Debito');
        }

        $product_purchases = Product_purchase::from('product_purchases AS pp')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pp.purchase_id', 'pp.product_id', 'pp.quantity', 'pp.price', 'pro.name', 'pro.stock', 'pro.price AS Rprecio', 'cat.iva')
        ->where('pp.purchase_id', '=', $request->session()->get('purchase'))->get();

        $products = Product::from('products AS pro')
        ->join('product_purchases AS pp', 'pp.product_id', '=', 'pro.id')
        ->select('pro.id', 'pro.name', 'pp.price')
        ->get();

        $discrepancies = Nc_discrepancy::get();

        $cont = 0;
        foreach($product_purchases as $pp){
            $prod = Product::select('stock')->where('id', '=', $pp->product_id)->first();
            if($pp->quantity > $prod->stock){
                $cont ++;
            }
        }

        if($cont == 0){
            return view('admin.ndpurchase.create', compact('purchases', 'products', 'product_purchases', 'discrepancies'));
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
        $purchase = $request->session()->get('purchase');
        $pur = Purchase::findOrFail($purchase);
        $branch = $request->session()->get('branch');
        $discrepancy = $request->nc_discrepancy_id;
        $total = $pur->total;
        $totaly = $request->total;
        $totality = $total - $totaly;
        if ($discrepancy != 2 && $totality < 0) {
            return redirect("purchase")->with('warning', 'El valor de ND supera el valor de la Compra');
        }
        try{
            DB::beginTransaction();
            //Registrar tabla Nota Credito
            $ndpurchase = new Ndpurchase();
            $ndpurchase->purchase              = $pur->purchase;
            $ndpurchase->user_id               = Auth::user()->id;
            $ndpurchase->branch_id             = $branch;
            $ndpurchase->purchase_id           = $purchase;
            $ndpurchase->supplier_id           = $request->supplier_id;
            $ndpurchase->voucher_type_id       = 11;

            $ndpurchase->nc_discrepancy_id     = $request->nc_discrepancy_id;
            if ($discrepancy == 2) {
                $ndpurchase->total             = $pur->total;
                $ndpurchase->total_iva         = $pur->total_iva;
                $ndpurchase->total_pay         = $pur->total_pay;
            } else {
                $ndpurchase->total             = $request->total;
                $ndpurchase->total_iva         = $request->total_iva;
                $ndpurchase->total_pay         = $request->total_pay;
            }
            $ndpurchase->save();

            //Seleccionar los productos de la compra
            $product_purchases = Product_purchase::where('purchase_id', $purchase)->get();
            if ($discrepancy == 2) {
                foreach ($product_purchases as $pp) {
                    $id = $pp->product_id;
                    $quantity = $pp->quantity;
                    $price = $pp->price;
                    $branch_product = Branch_product::where('branch_id', $branch)->where('product_id', $id)->first();
                    $stk = $branch_product->stock;
                    $stky = $stk - $quantity;
                    $branch_product->stock = $stky;
                    $branch_product->update();

                    $prod = Product::findOrFail($id);
                    $stka = $prod->stock;
                    $pricea = $prod->price;
                    $quan = $pp->quantity;
                    $pricep = $pp->price;
                    $stocknew = $stka - $quan;
                    if ($stocknew > 0) {
                        $prod->price = ($stka * $pricea - $quan * $pricep) / ($stocknew);
                    } else {
                        $prod->price = $pricep;
                    }
                    $prod->update();

                    $ndpurchase_product = new Ndpurchase_product();
                    $ndpurchase_product->ndpurchase_id = $ndpurchase->id;
                    $ndpurchase_product->product_id = $id;
                    $ndpurchase_product->quantity = $quantity;
                    $ndpurchase_product->price = $pp->price;
                    $ndpurchase_product->save();

                    $products = Product::findOrFail($id);

                        $id = $products->id;
                        $stockardex = $products->stock;
                        //Actualizar Kardex
                        $kardex = new Kardex();
                        $kardex->product_id = $id;
                        $kardex->branch_id = $ndpurchase->branch_id;
                        $kardex->operation = 'ND_COMPRA';
                        $kardex->number = $ndpurchase->id;
                        $kardex->quantity = $quantity;
                        $kardex->stock = $stockardex;
                        $kardex->save();
                }
            } else {
                $product_id     = $request->product_id;
                $quantity       = $request->quantity;
                $price          = $request->price;
                $stock          = $request->stock;

                $cont = 0;
                while($cont < count($product_id)){
                    if ($discrepancy == 1) {
                        $ndpurchase_product = new Ndpurchase_product();
                        $ndpurchase_product->ndpurchase_id = $ndpurchase->id;
                        $ndpurchase_product->product_id = $product_id[$cont];
                        $ndpurchase_product->quantity = $quantity[$cont];
                        $ndpurchase_product->price = $price[$cont];
                        $ndpurchase_product->save();
                        //Calcular el valor para actualizar Branch_products
                        $branch_products = Branch_product::where('branch_id', $ndpurchase->branch_id)->where('product_id', $product_id[$cont])->first();
                        $id = $branch_products->product_id;
                        $prestock = $branch_products->stock;
                        $stock = $prestock - $ndpurchase_product->quantity;
                        //Actualizar tabla Branch Products
                        $branch_products->stock = $stock;
                        $branch_products->update();

                        //calcular valor para actualizar kardex
                        $products = Product::where('id', $product_id[$cont])->first();

                        $id = $products->id;
                        $stockardex = $products->stock;
                        //Actualizar Kardex
                        $kardex = new Kardex();
                        $kardex->product_id = $id;
                        $kardex->branch_id = $ndpurchase->branch_id;
                        $kardex->operation = 'ND_COMPRA';
                        $kardex->number = $ndpurchase->id;
                        $kardex->quantity = $quantity[$cont];
                        $kardex->stock = $stockardex;
                        $kardex->save();

                    }else {
                        //Registrar la nota credito
                        $ndpurchase_product = new Ndpurchase_product();
                        $ndpurchase_product->ndpurchase_id = $ndpurchase->id;
                        $ndpurchase_product->product_id = $product_id[$cont];
                        $ndpurchase_product->quantity = $quantity[$cont];
                        $ndpurchase_product->price = $price[$cont];
                        $ndpurchase_product->save();
                    }

                    $cont++;
                }
            }

            /*
            $invo = Invoice::findOrFail($invoice);
            //metodo para uso de abono a otra factura
            if($invo->balance > 0){
                $pay_event = new Pay_event();
                $pay_event->origin = $invo->invoice;
                $pay_event->destination = null;
                $pay_event->document = 'FACTURA';
                $pay_event->pay = $invo->pay;
            }*/
            //actualizando campo status de la factura
            $purchase = Purchase::findOrFail($purchase);
            $purchase->status = 'DEBIT_NOTE';
            $purchase->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('purchase');


        /*
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
            $ndpurchase->total_iva     = $request->total_iva;
            $ndpurchase->total_pay     = $request->total_pay;
            $ndpurchase->save();

            $product_id = $request->product_id;
            $quantity = $request->quantity;
            $price = $request->price;
            $stock = $request->stock;
            $cont = 0;

            while($cont < count($product_id)){

                //Methodo para crear la relacion NC compra con productos
                $ndproduct_purchase = new Ndpurchase_product();
                $ndproduct_purchase->ndpurchase_id = $ndpurchase->id;
                $ndproduct_purchase->product_id = $product_id[$cont];
                $ndproduct_purchase->quantity = $quantity[$cont];
                $ndproduct_purchase->price = $price[$cont];
                $ndproduct_purchase->save();

                //selecciona el producto que viene del array
                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $ndproduct_purchase->product_id)
                ->first();

                $id = $products->id;
                $uti = $products->utility;
                $pre = $products->price;
                $stockardex = $products->stock;
                $preven = $pre + ($pre * $uti / 100);
                //Cambia el valor de venta del producto
                $product = Product::findOrFail($id);
                $product->sale_price = $preven;
                $product->update();

                //Metodo para actualizar la estok productos de la sucursal
                $branch_products = Branch_product::from('branch_products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.product_id', 'bp.branch_id', 'bp.stock', 'pro.id AS idP', 'bra.id')
                ->where('bp.product_id', '=', $ndproduct_purchase->product_id)
                ->where('bp.branch_id', '=', 1)
                ->first();

                $id = $branch_products->idP;
                $prestock = $branch_products->stock;
                $stock = $prestock - $ndproduct_purchase->quantity;

                $branch_product = Branch_product::findOrFail($id);
                $branch_product->stock = $stock;
                $branch_product->update();

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
        return redirect('ndpurchase');*/
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
            ->select('ndp.id', 'ndp.purchase', 'ndp.total', 'ndp.total_iva', 'ndp.total_pay', 'ndp.created_at', 'pur.id as idP', 'sup.name', 'bra.name as nameB')
            ->where('ndp.id', '=', $id)
            ->first();

        /*mostrar detalles*/
        $ndpurchase_products = Ndpurchase_product::from('ndpurchase_products AS np')
        ->join('products AS pro', 'np.product_id', '=', 'pro.id')
        ->join('ndpurchases AS nd', 'np.ndpurchase_id', '=', 'nd.id')
        ->select('np.quantity', 'np.price', 'nd.total', 'nd.total_iva', 'nd.total_pay', 'pro.name')
        ->where('np.ndpurchase_id', '=', $id)
        ->get();

        return view('admin.ndpurchase.show', compact('ndpurchases', 'ndpurchase_products'));
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
