<?php

namespace App\Http\Controllers;

use App\Models\Order_product;
use App\Http\Requests\StoreOrderProductRequest;
use App\Http\Requests\UpdateOrderProductRequest;
use App\Models\Branch_product;
use App\Models\Indicator;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Kardex;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $orders = Order::from('orders AS ord')
        ->join('users AS use', 'ord.user_id', 'use.id')
        ->join('branches AS bra', 'ord.branch_id', 'bra.id')
        ->join('customers AS cus', 'ord.customer_id', 'cus.id')
        ->join('payment_forms AS pf', 'ord.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'ord.payment_method_id', 'pm.id')
        ->select('ord.id', 'ord.due_date', 'ord.items', 'ord.total', 'ord.total_iva', 'ord.total_pay', 'ord.pay', 'ord.balance', 'ord.retention', 'ord.status', 'ord.created_at', 'use.name', 'bra.name AS nameB', 'cus.name AS nameC', 'pf.id as idPF', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $request->session()->get('order'))
        ->first();
        $order_products = Order_product::from('order_products AS op')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('orders AS ord', 'op.order_id', '=', 'ord.id')
        ->select('op.product_id', 'op.quantity', 'op.price', 'op.subtotal', 'ord.id', 'ord.total', 'ord.total_iva', 'ord.total_pay', 'pro.id', 'pro.name')
        ->where('op.order_id', '=', $orders->id)
        ->get();
        $products = Product::from('products AS pro')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pro.name', 'pro.sale_price', 'pro.stock', 'cat.iva')
        ->where('pro.status', '=', 'ACTIVO')
        ->get();

        $cont = 0;

        foreach($order_products as $op){
            $prod = Product::select('stock')->where('id', '=', $op->product_id)->first();
            if($op->quantity >= $prod->stock){
                $cont ++;
            }
        }

        if ($cont > 0) {
            return redirect('order')->with('warning', 'La venta de algunos productos supera el stock');
        } else {
            return view('admin.order_product.create', compact('orders', 'products', 'order_products', 'ordersis'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderProductRequest $request)
    {
        try{
            DB::beginTransaction();

            $indicator   = Indicator::where('id', '=', 1)->first();
            $number      = $indicator->from;
            $inv      = count(Invoice::get());
            $nunfact  = $number + $inv;
            $nunfact  ++;

            /*$productoinvoices = count(Productoinvoice::where('invoice_id', '=', 30)->get());
         dd($productoinvoices);*/

            $branch = $request->session()->get('branch');
            $order_product = Order_product::where('order_id', '=', $request->session()->get('order'))->get();

            foreach($order_product AS $op){
                $producty = Branch_product::select('stock')
                ->where('product_id', '=', $op->product_id)
                ->where('Branch_id', '=', $branch)
                ->first();
                if($op->quantity > $producty->stock){
                    return redirect("branch")->with('warning', 'Cantidad supera el stock');
                }
            }

            $orders = Order::where('id', '=', $request->session()->get('order'))->first();

            $invoice                    = new Invoice();
            $invoice->invoice           = $nunfact;
            $invoice->type_document     = '01';
            $invoice->type_operation    = '10';
            $invoice->due_date          = $orders->due_date;
            $invoice->items             = $orders->items;
            $invoice->total             = $orders->total;
            $invoice->total_iva         = $orders->total_iva;
            $invoice->total_pay         = $orders->total_pay;
            $invoice->pay               = $orders->pay;
            $invoice->balance           = $orders->total_pay;
            $invoice->retention         = $orders->retention;
            $invoice->user_id           = $orders->user_id;
            $invoice->branch_id         = $orders->branch_id;
            $invoice->customer_id       = $orders->customer_id;
            $invoice->payment_form_id   = $orders->payment_form_id;
            $invoice->payment_method_id = $orders->payment_method_id;
            $invoice->retention_id      = $orders->retention_id;
            $invoice->save();



            $cont = 0;
            foreach ($order_product as $orp) {

                $subtotal = $orp->quantity * $orp->price;
                $ivasub = $subtotal * $orp->iva/100;
                $item = $cont + 1;

                $invoice_product = new Invoice_product();
                $invoice_product->invoice_id = $invoice->id;
                $invoice_product->product_id = $orp->product_id;
                $invoice_product->quantity   = $orp->quantity;
                $invoice_product->price      = $orp->price;
                $invoice_product->iva        = $orp->iva;
                $invoice_product->subtotal   = $subtotal;
                $invoice_product->ivasubt    = $ivasub;
                $invoice_product->item       = $item;
                $invoice_product->save();

                $idp = $invoice_product->product_id;
                $branch_products = Branch_product::where('product_id', $idp)
                    ->where('branch_id', $branch)->first();
                    /*
                $branch_products = Branch_product::from('branch_products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.stock', 'pro.id AS idP', 'bra.id as idB')
                ->where('bp.product_id', '=', $invoice_product->product_id)
                ->where('bp.branch_id', '=', $branch)
                ->first();*/

                $id = $branch_products->id;
                $prestock = $branch_products->stock;
                $stock = $prestock - $invoice_product->quantity;

                $branch_product = Branch_product::findOrFail($id);
                $branch_product->stock = $stock;
                $branch_product->update();

                $products = Product::findOrFail($idp);
                /*
                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $invoice_product->product_id)
                ->first();*/

                //$id = $products->id;
                $stockardex = $products->stock;

                $kardex = new Kardex();
                $kardex->product_id = $idp;
                $kardex->branch_id = $invoice->branch_id;
                $kardex->operation = 'VENTA';
                $kardex->number = $invoice->invoice;
                $kardex->quantity = $orp->quantity;
                $kardex->stock = $stockardex;
                $kardex->save();

                $cont++;
            }

            $order = order::findOrFail($orders->id);
                $order->status = 'FACTURADO';
                $order->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function show(Order_product $order_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_product $order_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderProductRequest  $request
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderProductRequest $request, Order_product $order_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_product $order_product)
    {
        //
    }
}
