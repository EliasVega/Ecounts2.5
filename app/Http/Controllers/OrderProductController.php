<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Http\Requests\StoreOrderProductRequest;
use App\Http\Requests\UpdateOrderProductRequest;
use App\Models\BranchProduct;
use App\Models\Indicator;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
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
        ->select('ord.id', 'ord.due_date', 'ord.items', 'ord.total', 'ord.totalIva', 'ord.totalPay', 'ord.pay', 'ord.balance', 'ord.retention', 'ord.status', 'ord.created_at', 'use.name', 'bra.name AS nameB', 'cus.name AS nameC', 'pf.id as idPF', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $request->session()->get('order'))
        ->first();
        $orderProducts = OrderProduct::from('order_products AS op')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('orders AS ord', 'op.order_id', '=', 'ord.id')
        ->select('op.product_id', 'op.quantity', 'op.price', 'op.subtotal', 'ord.id', 'ord.total', 'ord.totalIva', 'ord.totalPay', 'pro.id', 'pro.name')
        ->where('op.order_id', '=', $orders->id)
        ->get();
        $products = Product::from('products AS pro')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'pro.name', 'pro.salePrice', 'pro.stock', 'cat.iva')
        ->where('pro.status', '=', 'ACTIVO')
        ->get();

        $cont = 0;

        foreach($orderProducts as $op){
            $prod = Product::select('stock')->where('id', '=', $op->product_id)->first();
            if($op->quantity >= $prod->stock){
                $cont ++;
            }
        }

        if ($cont > 0) {
            return redirect('order')->with('warning', 'La venta de algunos productos supera el stock');
        } else {
            return view('admin.orderProduct.create', compact('orders', 'products', 'orderProducts'));
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
            $orderProduct = OrderProduct::where('order_id', '=', $request->session()->get('order'))->get();

            foreach($orderProduct AS $op){
                $producty = BranchProduct::select('stock')
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
            $invoice->tipDoc            = '01';
            $invoice->tipOpe            = '10';
            $invoice->due_date          = $orders->due_date;
            $invoice->items             = $orders->items;
            $invoice->total             = $orders->total;
            $invoice->totalIva          = $orders->totalIva;
            $invoice->totalPay          = $orders->totalPay;
            $invoice->pay               = $orders->pay;
            $invoice->balance           = $orders->totalPay;
            $invoice->retention         = $orders->retention;
            $invoice->user_id           = $orders->user_id;
            $invoice->branch_id         = $orders->branch_id;
            $invoice->customer_id       = $orders->customer_id;
            $invoice->payment_form_id   = $orders->payment_form_id;
            $invoice->payment_method_id = $orders->payment_method_id;
            $invoice->retention_id      = $orders->retention_id;
            $invoice->save();



            $cont = 0;
            foreach ($orderProduct as $orp) {

                $subtotal = $orp->quantity * $orp->price;
                $ivasub = $subtotal * $orp->iva/100;
                $item = $cont + 1;

                $invoiceProduct = new InvoiceProduct();
                $invoiceProduct->invoice_id = $invoice->id;
                $invoiceProduct->product_id = $orp->product_id;
                $invoiceProduct->quantity   = $orp->quantity;
                $invoiceProduct->price      = $orp->price;
                $invoiceProduct->iva        = $orp->iva;
                $invoiceProduct->subtotal   = $subtotal;
                $invoiceProduct->ivasubt    = $ivasub;
                $invoiceProduct->item       = $item;
                $invoiceProduct->save();

                $branchProducts = BranchProduct::from('branch_products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.stock', 'pro.id AS idP', 'bra.id as idB')
                ->where('bp.product_id', '=', $invoiceProduct->product_id)
                ->where('bp.branch_id', '=', $branch)
                ->first();

                $id = $branchProducts->id;
                $prestock = $branchProducts->stock;
                $stock = $prestock - $invoiceProduct->quantity;

                $branchProduct = BranchProduct::findOrFail($id);
                $branchProduct->stock = $stock;
                $branchProduct->update();

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
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function show(OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderProductRequest  $request
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderProductRequest $request, OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderProduct  $orderProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderProduct $orderProduct)
    {
        //
    }
}
