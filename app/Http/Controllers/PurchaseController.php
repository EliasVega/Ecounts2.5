<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatepurchaseRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\Branch_product;
use App\Models\Card;
use App\Models\Company;
use App\Models\Department;
use App\Models\Document;
use App\Models\Kardex;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Pay_purchase;
use App\Models\Pay_purchase_payment_method;
use App\Models\Payment_form;
use App\Models\Payment_method;
use App\Models\Product;
use App\Models\Product_branch;
use App\Models\Product_purchase;
use App\Models\Regime;
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
            ->join('branches as bra', 'pur.branch_id', 'bra.id')
            ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
            ->join('users AS use', 'pur.user_id', '=', 'use.id')
            ->select('pur.id', 'bra.name as nameB', 'sup.name as nameS', 'pur.purchase', 'pur.total_pay', 'pur.balance', 'pur.created_at', 'pur.status', 'use.name')
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
        $regimes = Regime::get();
        $taxes = Tax::get();
        $payment_forms = Payment_form::get();
        $payment_methods = Payment_method::get();
        $banks = Bank::get();
        $cards = Card::get();
        $branchs = Branch::get();
        $products = Product::from('products AS pro')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pro.name', 'pro.sale_price', 'pro.stock', 'cat.iva', 'pro.price')
        ->where('pro.status', '=', 'ACTIVE')
        ->get();

        return view('admin.purchase.create', compact('suppliers', 'products', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'suppliers', 'regimes', 'payment_forms', 'payment_methods', 'banks', 'cards', 'branchs'));
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

            $product_id = $request->product_id;
            $quantity   = $request->quantity;
            $price      = $request->price;
            $iva        = $request->iva;
            $pay        = $request->pay;
            $branch     = $request->branch_id[0];

            $purchase = new Purchase();
            $purchase->user_id     = Auth::user()->id;
            $purchase->branch_id   = $branch;
            $purchase->supplier_id = $request->supplier_id;
            $purchase->payment_form_id = $request->payment_form_id;
            $purchase->payment_method_id = $request->payment_method_id;
            $purchase->purchase    = $request->purchase;
            $purchase->due_date    = $request->due_date;
            $purchase->items       = count($product_id);
            $purchase->total       = $request->total;
            $purchase->total_iva    = $request->total_iva;
            $purchase->total_pay    = $request->total_pay;
            $purchase->status      = 'ACTIVE';
            $purchase->pay         = $pay;
            $purchase->balance     = $request->total_pay - $pay;
            $purchase->save();

            if($pay > 0){
                    $pay_purchase                   = new Pay_purchase();
                    $pay_purchase->pay              = $pay;
                    $pay_purchase->balance_purchase = $purchase->balance;
                    $pay_purchase->user_id          = $purchase->user_id;
                    $pay_purchase->branch_id        = $purchase->branch_id;
                    $pay_purchase->purchase_id      = $purchase->id;
                    $pay_purchase->save();

                    $pay_purchase_Payment_method                     = new Pay_purchase_payment_method();
                    $pay_purchase_Payment_method->pay_purchase_id    = $pay_purchase->id;
                    $pay_purchase_Payment_method->payment_method_id  = $request->payment_method_id;
                    $pay_purchase_Payment_method->bank_id            = $request->bank_id;
                    $pay_purchase_Payment_method->card_id            = $request->card_id;
                    $pay_purchase_Payment_method->payment            = $request->pay;
                    $pay_purchase_Payment_method->transaction        = $request->transaction;
                    $pay_purchase_Payment_method->save();
                }

            //Toma el Request del array

            $cont = 0;
            //Ingresa los productos que vienen en el array
            while($cont < count($product_id)){
                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub = $subtotal * $iva[$cont]/100;
                $item = $cont + 1;
                $prodid = $product_id[$cont];

                $product_purchase = new Product_purchase();
                $product_purchase->purchase_id = $purchase->id;
                $product_purchase->product_id  = $product_id[$cont];
                $product_purchase->quantity    = $quantity[$cont];
                $product_purchase->price       = $price[$cont];
                $product_purchase->iva         = $iva[$cont];
                $product_purchase->subtotal    = $subtotal;
                $product_purchase->ivasubt     = $ivasub;
                $product_purchase->item        = $item;
                $product_purchase->save();
                //selecciona el producto que viene del array
                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $product_purchase->product_id)
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

                //selecciona el producto de la sucursal que sea el mismo del array
                $branch_products = Branch_product::where('product_id', '=', $product_purchase->product_id)
                ->where('branch_id', '=', $branch)
                ->first();

                if (isset($branch_products)) {
                    $id = $branch_products->id;
                    $stock = $branch_products->stock + $product_purchase->quantity;
                    $branch_product = Branch_product::findOrFail($id);
                    $branch_product->stock = $stock;
                    $branch_product->update();
                } else {
                    //metodo para crear el producto en la sucursal y asignar stock
                    $branch_product = new Branch_product();
                    $branch_product->branch_id = $branch;
                    $branch_product->product_id = $product_purchase->product_id;
                    $branch_product->stock = $product_purchase->quantity;
                    $branch_product->order_product = 0;
                    $branch_product->save();
                }

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
        ->join('users as use', 'pur.user_id', 'use.id')
        ->join('branches AS bra', 'pur.branch_id', '=', 'bra.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->join('payment_forms AS pf', 'pur.payment_form_id', '=', 'pf.id')
        ->join('payment_methods as pm', 'pur.payment_method_id', '=', 'pm.id')
        ->select('pur.id', 'pur.purchase', 'pur.due_date', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pur.balance', 'pur.created_at', 'bra.name as nameB', 'sup.name as nameC', 'pf.name as namePF', 'pm.name as namePM', 'use.name')
        ->where('pur.id', '=', $id)->first();

        /*mostrar detalles*/
        $product_purchases = product_purchase::from('product_purchases AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->select('pp.quantity', 'pp.price', 'pp.subtotal', 'pur.id', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pro.name', 'sup.name AS nameC')
        ->where('pp.purchase_id', '=', $id)
        ->get();

        return view('admin.purchase.show', compact('purchases', 'product_purchases'));
    }

    public function show_ncpurchase($id)
     {
        $purchase = Purchase::findOrFail($id);
        \session()->put('purchase', $purchase->id, 60 * 24 * 365);
        \session()->put('supplier_id', $purchase->supplier_id, 60 * 24 *365);
        \session()->put('purchase', $purchase->purchase, 60 * 24 *365);
        \session()->put('iva', $purchase->iva, 60 * 24 *365);
        \session()->put('total', $purchase->total, 60 * 24 *365);
        \session()->put('status', $purchase->status, 60 * 24 *365);

        if ($purchase->status != 'ACTIVE') {
            return redirect("purchase")->with('warning', 'Esta Compra ya tiene una Nota Credito o Debito');
        } else {
            return redirect('ncpurchase/create');
        }
     }

     public function show_ndpurchase($id)
     {
        $purchase = Purchase::findOrFail($id);
        \session()->put('purchase', $purchase->id, 60 * 24 * 365);
        \session()->put('supplier_id', $purchase->supplier_id, 60 * 24 *365);
        \session()->put('purchase', $purchase->purchase, 60 * 24 *365);
        \session()->put('iva', $purchase->iva, 60 * 24 *365);
        \session()->put('total', $purchase->total, 60 * 24 *365);
        \session()->put('status', $purchase->status, 60 * 24 *365);

        if ($purchase->status != 'ACTIVE') {
            return redirect("purchase")->with('warning', 'Esta Compra ya tiene una Nota Debito o Credito');
        } else {
            return redirect('ndpurchase/create');
        }
     }

     public function show_pay_purchase($id)
     {

        $purchases = Purchase::findOrFail($id);
        \session()->put('purchase', $purchases->id, 60 * 24 * 365);
        \session()->put('due_date', $purchases->due_date, 60 * 24 *365);
        \session()->put('total', $purchases->total, 60 * 24 *365);
        \session()->put('total_iva', $purchases->total_iva, 60 * 24 *365);
        \session()->put('total_pay', $purchases->total_Pay, 60 * 24 *365);
        \session()->put('status', $purchases->status, 60 * 24 *365);

        return redirect('pay_purchase');
     }

     public function show_pdf_purchase(Request $request, $id)
    {
        $purchase = Purchase::from('purchases AS pur')
        ->join('branches AS bra', 'pur.branch_id', '=', 'bra.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->join('documents AS doc', 'sup.document_id', '=', 'doc.id')
        ->join('regimes AS reg', 'sup.regime_id', '=', 'reg.id')
        ->join('municipalities AS mun', 'sup.municipality_id', '=', 'mun.id')
        ->join('payment_forms AS pf', 'pur.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'pur.payment_method_id', 'pm.id')
        ->select('pur.id', 'pur.purchase', 'pur.created_at', 'pur.due_date',  'pur.total', 'bra.name AS nameS', 'bra.address AS addressB', 'bra.email', 'bra.phone', 'bra.mobile', 'sup.name AS nameS', 'sup.document_id', 'sup.number', 'sup.address', 'sup.email', 'doc.initial', 'pur.created_at', 'reg.name AS nameR', 'mun.name AS nameM', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('pur.id', '=', $id)->first();

        $product_purchases = Product_purchase::from('product_purchases AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pp.id', 'pur.id AS idI', 'pur.created_at', 'pur.total', 'pp.quantity', 'pp.price', 'pro.name', 'cat.iva')
        ->where('pp.purchase_id', '=', $id)
        ->get();

        $purchases = Product_purchase::from('product_purchases AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pp.id', 'pur.id AS idI', 'pur.created_at', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pp.quantity', 'pp.price', 'pro.name', 'cat.iva')
        ->where('pp.purchase_id', '=', $id)
        ->first();

        $company = Company::from('companies AS com')
        ->join('departments AS dep', 'com.department_id', '=', 'dep.id')
        ->join('municipalities AS mun', 'com.municipality_id', '=', 'mun.id')
        ->join('liabilities AS lia', 'com.liability_id', '=', 'lia.id')
        ->join('regimes AS reg', 'com.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'com.tax_id', '=', 'tax.id')
        ->join('organizations AS org', 'com.organization_id', '=', 'org.id')
        ->select('com.id', 'com.name', 'com.nit', 'com.dv', 'com.logo', 'dep.name AS nameD', 'mun.name AS nameM', 'lia.name AS nameL', 'reg.name AS nameR', 'org.name AS nameO', 'tax.description')
        ->where('com.id', '=', 1)
        ->first();

        $days = $purchase->created_at->diffInDays($purchase->fecven);
        $purchasepdf = "FACT-". $purchase->purchase;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.purchase.pdf', compact('purchase', 'days', 'product_purchases', 'company', 'logo', 'purchases'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        //return $pdf->stream('vista-pdf', "$purchasepdf.pdf");
        return $pdf->download("$purchasepdf.pdf");
    }

    public function post_purchase(Request $request, $id)
    {
        $purchase = Purchase::from('purchases AS pur')
        ->join('branches AS bra', 'pur.branch_id', '=', 'bra.id')
        ->join('suppliers AS sup', 'pur.supplier_id', '=', 'sup.id')
        ->join('documents AS doc', 'sup.document_id', '=', 'doc.id')
        ->join('regimes AS reg', 'sup.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'sup.tax_id', '=', 'tax.id')
        ->join('municipalities AS mun', 'sup.municipality_id', '=', 'mun.id')
        ->join('payment_forms AS pf', 'pur.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'pur.payment_method_id', 'pm.id')
        ->select('pur.id', 'pur.purchase', 'pur.created_at', 'pur.due_date',  'pur.total', 'bra.name AS nameS', 'bra.address AS addressB', 'bra.email', 'bra.phone', 'bra.mobile', 'sup.name AS nameC', 'sup.document_id', 'sup.number', 'sup.address', 'sup.email', 'doc.initial', 'pur.created_at', 'reg.name AS nameR', 'mun.name AS nameM', 'tax.description', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('pur.id', '=', $id)->first();

        $product_purchases = Product_purchase::from('product_purchases AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pp.id', 'pur.id AS idI', 'pur.created_at', 'pur.total', 'pp.quantity', 'pp.price', 'pro.name', 'cat.iva')
        ->where('pp.purchase_id', '=', $id)
        ->get();

        $purchases = Product_purchase::from('purchase_products AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('purchases AS pur', 'pp.purchase_id', '=', 'pur.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pp.id', 'pur.id AS idI', 'pur.created_at', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pp.quantity', 'pp.price', 'pro.name', 'cat.iva')
        ->where('pp.purchase_id', '=', $id)
        ->first();

        $company = Company::from('companies AS com')
        ->join('departments AS dep', 'com.department_id', '=', 'dep.id')
        ->join('municipalities AS mun', 'com.municipality_id', '=', 'mun.id')
        ->join('liabilities AS lia', 'com.liability_id', '=', 'lia.id')
        ->join('regimes AS reg', 'com.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'com.tax_id', '=', 'tax.id')
        ->join('organizations AS org', 'com.organization_id', '=', 'org.id')
        ->select('com.id', 'com.name', 'com.nit', 'com.dv', 'com.logo', 'dep.name AS nameD', 'mun.name AS nameM', 'lia.name AS nameL', 'reg.name AS nameR', 'org.name AS nameO', 'tax.description')
        ->where('com.id', '=', 1)
        ->first();

        $days = $purchase->created_at->diffInDays($purchase->fecven);
        $purchasepdf = "FACT-". $purchase->purchase;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.purchase.post', compact('purchase', 'days', 'product_purchases', 'company', 'logo', 'purchases', 'indicators'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,497.64), 'portrait');

        return $pdf->stream('vista-pdf', "$purchasepdf.pdf");
        //return $pdf->download("$purchasepdf.pdf");
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
