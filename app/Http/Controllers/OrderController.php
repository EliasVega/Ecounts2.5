<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\Branch_product;
use App\Models\Card;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Order_product;
use App\Models\Organization;
use App\Models\Pay_event;
use App\Models\Payment_form;
use App\Models\Payment_method;
use App\Models\Payment_method_pay_order;
use App\Models\Pay_order;
use App\Models\Regime;
use App\Models\Retention;
use App\Models\Sale_box;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $branch = Branch::where('id', '=', $request->session()->get('branch'))->first();
        $rol = Auth::user()->role_id;
        if (request()->ajax()) {
            if ($rol == 1 || $rol == 2) {
                $orders = Order::from('orders AS ord')
                ->join('branches AS bra', 'ord.branch_id', '=', 'bra.id')
                ->join('customer AS cus', 'ord.customer_id', '=', 'cus.id')
                ->select('ord.id', 'cus.name', 'ord.total_pay', 'ord.balance', 'ord.status', 'ord.created_at', 'bra.name AS nameB')
                ->get();
            } else {
                $orders = Order::from('orders AS ord')
                ->join('users AS use', 'ord.user_id', '=', 'use.id')
                ->join('branches AS bra', 'ord.branch_id', '=', 'bra.id')
                ->join('customers AS cus', 'ord.customer_id', '=', 'cus.id')
                ->select('ord.id', 'cus.name', 'ord.total_pay', 'ord.balance', 'ord.status', 'ord.created_at', 'bra.name AS nameB')
                ->where('bra.id', '=', $request->session()->get('branch'))
                ->where('use.id', '=', Auth::user()->id)
                ->where('use.status', '=', 'ACTIVO')
                ->get();
            }
            return datatables()
            ->of($orders)
            ->editColumn('created_at', function (Order $order) {
                return $order->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/order/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }

        if ($branch->id == 1) {
            return redirect('branch')->with('warning', 'No tiene Autorizacion para realizar orders');
        } else {
            return view('admin.order.index');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $departments    = Department::get();
        $municipalities = Municipality::get();
        $documents      = Document::get();
        $customers      = Customer::get();
        $liabilities    = Liability::get();
        $organizations  = Organization::get();
        $regimes        = Regime::get();
        $taxes          = Tax::get();
        $payment_forms   = Payment_form::get();
        $payment_methods = Payment_method::get();
        $banks          = Bank::get();
        $cards          = Card::get();
        $branch         = $request->session()->get('branch');
        $retentions     = Retention::get();
        $pay_events      = Pay_event::where('status', '=', 'PENDIENTE')->get();

        $branch_products = Branch_product::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', '=', $request->session()->get('branch'))
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'ACTIVE')
        ->get();
        return view('admin.order.create', compact('customers', 'branch_products', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'regimes', 'payment_forms', 'payment_methods', 'retentions', 'banks', 'cards', 'pay_events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        try{
            DB::beginTransaction();
            //Obteniendo variables
            $product_id   = $request->product_id;
            $quantity     = $request->quantity;
            $price        = $request->price;
            $iva          = $request->iva;
            $idP        = $request->idP;
            $pay          = $request->pay;

            //registro en la tabla Order
            $order                    = new Order();
            $order->user_id           = Auth::user()->id;
            $order->branch_id         = $request->session()->get('branch');
            $order->customer_id       = $request->customer_id;
            $order->payment_form_id   = $request->payment_form_id;
            $order->payment_method_id = $request->payment_method_id;
            $order->retention_id      = $request->retention_id;
            $order->due_date          = $request->due_date;
            $order->items             = count($product_id);
            $order->total             = $request->total;
            $order->total_iva          = $request->total_iva;
            $order->total_pay          = $request->total_pay;
            $order->pay               = $pay;
            $order->balance           = $request->total_pay;
            $order->retention         = $request->retention;
            $order->save();
            //si hay Abono registra abono
            if($pay > 0){
                $payEven = $request->abv;
                if ($payEven != 0) {
                    //si el abono es un abono de otro documento aplica abono evento
                    $pay_event = Pay_event::findOrFail($payEven);
                    $pay_event->destination = $order->id;
                    $pay_event->status      = 'APLICADO';
                    $pay_event->update();
                    $boxy = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
                    $in_pay_event = $boxy->in_pay_event + $pay;

                    $sale_box = Sale_box::findOrFail($boxy->id);
                    $sale_box->in_pay_event = $in_pay_event;
                    $sale_box->update();
                } else {
                    //si es un abono nuevo aplica abono pedido
                    $pay_order = new Pay_order();
                    $pay_order->pay       = $pay;
                    $pay_order->balance_order = $order->balance;
                    $pay_order->user_id   = $order->user_id;
                    $pay_order->branch_id = $order->branch_id;
                    $pay_order->order_id  = $order->id;
                    $pay_order->save();
                    //Registrando la tabla de metodos de pago abono pedido
                    $payment_method_pay_order = new Payment_method_pay_order();
                    $payment_method_pay_order->pay_order_id        = $pay_order->id;
                    $payment_method_pay_order->payment_method_id  = $request->payment_method_id;
                    $payment_method_pay_order->bank_id            = $request->bank_id;
                    $payment_method_pay_order->card_id            = $request->card_id;
                    $payment_method_pay_order->pay_event_id        = $request->pay_event_id;
                    $payment_method_pay_order->payment            = $request->pay;
                    $payment_method_pay_order->transaction        = $request->transaction;
                    $payment_method_pay_order->save();
                }
                //extrayendo variables
                $mp = $request->paiment_method_id;
                $boxy = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
                $in_order = $boxy->inOrder + $pay;
                $in_order_cash = $boxy->in_order_cash;
                $in_pay_cash = $boxy->in_pay_cash;
                $in_pay = $boxy->in_pay + $pay;
                $out = $boxy->out_cash;

                $cash = $boxy->cash;
                //si hay medio de pago
                if($mp == 1){
                    $in_order_cash += $pay;
                    $in_pay_cash += $pay;
                    $cash += $pay;
                }
                $totale = $cash - $out;
                //Actualizando la caja
                $sale_box = Sale_box::findOrFail($boxy->id);
                $sale_box->in_order_cash = $in_order_cash;
                $sale_box->in_order     = $in_order;
                $sale_box->in_pay_cash   = $in_pay_cash;
                $sale_box->in_pay       = $in_pay;
                $sale_box->cash        = $cash;
                $sale_box->total       = $totale;
                $sale_box->update();
            }
            $cont = 0;

            while($cont < count($product_id)){
                //registrando la tabla de orders y productos
                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub   = $subtotal * $iva[$cont]/100;

                $order_product = new Order_product();
                $order_product->order_id   = $order->id;
                $order_product->product_id = $idP[$cont];
                $order_product->quantity   = $quantity[$cont];
                $order_product->price      = $price[$cont];
                $order_product->iva        = $iva[$cont];
                $order_product->subtotal   = $subtotal;
                $order_product->ivasubt    = $ivasub;
                $order_product->save();
                //obteniendo datos de sucursal
                $branch_products = Branch_product::where('product_id', '=', $order_product->product_id)
                ->where('branch_id', '=', $order->branch_id)
                ->first();

                $id = $branch_products->id;
                $order_products = $branch_products->orderProduct + $order_product->quantity;
                //Actualizando la tabla sucursal productos
                $branchPro = Branch_product::findOrFail($id);
                $branchPro->order_product = $order_products;
                $branchPro->update();

                $cont++;
            }

            //obteniendo datos de la caja
            $boxy = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
            $ord = $boxy->order;
            $tpv = $order->total_pay;
            $nord = $ord + $tpv;
            //Actualizando caja
            $sale_box = Sale_box::findOrFail($boxy->id);
            $sale_box->order = $nord;
            $sale_box->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::from('orders AS ord')
        ->join('users AS use', 'ord.user_id', 'use.id')
        ->join('branches AS bra', 'ord.branch_id', 'bra.id')
        ->join('customers AS cus', 'ord.customer_id', 'cus.id')
        ->join('payment_forms AS pf', 'ord.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'ord.payment_method_id', 'pm.id')
        ->select('ord.id', 'ord.due_date', 'ord.items', 'ord.total', 'ord.total_iva', 'ord.total_pay', 'ord.pay', 'ord.balance', 'ord.retention', 'ord.status', 'ord.created_at', 'use.name', 'bra.name AS nameB', 'cus.name AS nameC', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $id)
        ->first();

        /*mostrar detalles*/
        $order_products = Order_product::from('order_products AS op')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('orders AS ord', 'op.order_id', '=', 'ord.id')
        ->select('op.quantity', 'op.price', 'op.subtotal', 'ord.id', 'ord.total', 'ord.total_iva', 'ord.total_pay', 'pro.name')
        ->where('op.order_id', '=', $id)
        ->get();

        return view('admin.order.show', compact('orders', 'order_products'));
    }

    public function show_invoicy($id)
     {
        $orders = Order::findOrFail($id);
        \session()->put('order', $orders->id, 60 * 24 * 365);
        \session()->put('branch_id', $orders->branch_id, 60 * 24 *365);
        \session()->put('customer_id', $orders->customer_id, 60 * 24 *365);
        \session()->put('payment_form_id', $orders->payment_form_id, 60 * 24 *365);
        \session()->put('payment_method_id', $orders->payment_method_id, 60 * 24 *365);
        \session()->put('retention_id', $orders->retention_id, 60 * 24 *365);
        \session()->put('due_date', $orders->due_date, 60 * 24 *365);
        \session()->put('total', $orders->total, 60 * 24 *365);
        \session()->put('total_iva', $orders->total_iva, 60 * 24 *365);
        \session()->put('total_pay', $orders->total_pay, 60 * 24 *365);
        \session()->put('status', $orders->estado, 60 * 24 *365);
        return redirect('order_product/create');
     }

     public function show_pay_order($id)
     {

        $orders = Order::findOrFail($id);
        \session()->put('order', $orders->id, 60 * 24 * 365);
        \session()->put('branch_id', $orders->branch_id, 60 * 24 *365);
        \session()->put('customer_id', $orders->customer_id, 60 * 24 *365);
        \session()->put('due_date', $orders->due_date, 60 * 24 *365);
        \session()->put('total', $orders->total, 60 * 24 *365);
        \session()->put('balance', $orders->total_pay, 60 * 24 *365);
        \session()->put('status', $orders->estado, 60 * 24 *365);

        return redirect('pay_order');
     }

     public function show_pdf_order(Request $request,$id)
    {
        $ordery = Order::from('orders AS ord')
        ->join('branches AS bra', 'ord.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'ord.customer_id', '=', 'cus.id')
        ->join('documents AS doc', 'cus.document_id', '=', 'doc.id')
        ->join('regimes AS reg', 'cus.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'cus.tax_id', '=', 'tax.id')
        ->join('municipalities AS mun', 'cus.municipality_id', '=', 'mun.id')
        ->join('payment_forms AS pf', 'ord.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'ord.payment_method_id', 'pm.id')
        ->select('ord.id', 'ord.created_at', 'ord.due_date', 'ord.total', 'bra.name AS nameB', 'bra.address as addressB', 'bra.phone', 'bra.mobile', 'cus.name AS nameC', 'cus.document_id', 'cus.number', 'cus.address', 'cus.phone', 'cus.email', 'doc.initial', 'reg.name AS nameR', 'mun.name AS nameM', 'tax.description', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $id)->first();

        $order_product = Order_product::from('order_products AS op')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('orders AS ord', 'op.order_id', '=', 'ord.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('op.id', 'ord.id AS idO', 'ord.created_at', 'ord.total', 'op.quantity', 'op.price', 'pro.name', 'cat.iva')
        ->where('op.order_id', '=', $id)
        ->get();

        $order = Order::from('orders as ord')
        ->join('order_products AS op', 'op.order_id', '=', 'ord.id')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ord.id', 'ord.total', 'ord.total_iva', 'ord.total_pay', 'cat.iva')
        ->where('ord.id', '=', $id)
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

        $days = $ordery->created_at->diffInDays($ordery->due_date);
        $orderpdf = "PEDIDO-". $ordery->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.order.pdf', compact('order', 'days', 'order_product', 'company', 'logo', 'ordery'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->download("$orderpdf.pdf");
    }

    public function eliminar($id)
    {
        $order = Order::findOrFail($id);
        if($order->status == 'ANULADO'){
            return redirect("order")->with('warning', 'Pedido Anulado Anteriormente');
        }

        if($order->balance > 0){
            $pay_event = new Pay_event();
            $pay_event->origin = $order->id;
            $pay_event->destination = null;
            $pay_event->document = 'PEDIDO';
            $pay_event->pay = $order->pay;
            $pay_event->save();
        }

        $order = Order::findOrFail($id);
        $order->total_pay = 0;
        $order->pay       = 0;
        $order->balance       = 0;
        $order->status      = 'ANULADO';
        $order->save();

        return redirect("order")->with('success', 'Pedido Anulado Satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
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
