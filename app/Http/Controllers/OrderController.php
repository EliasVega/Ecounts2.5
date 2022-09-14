<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\BranchProduct;
use App\Models\Card;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\OrderProduct;
use App\Models\Organization;
use App\Models\Payevent;
use App\Models\PaymentForm;
use App\Models\PaymentMethod;
use App\Models\PaymentmethodPayorder;
use App\Models\Payorder;
use App\Models\Regime;
use App\Models\Retention;
use App\Models\Salebox;
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
                ->select('ord.id', 'cus.name', 'ord.totalPay', 'ord.balance', 'ord.status', 'ord.created_at', 'bra.name AS nameB')
                ->get();
            } else {
                $orders = Order::from('orders AS ord')
                ->join('users AS use', 'ord.user_id', '=', 'use.id')
                ->join('branches AS bra', 'ord.branch_id', '=', 'bra.id')
                ->join('customers AS cus', 'ord.customer_id', '=', 'cus.id')
                ->select('ord.id', 'cus.name', 'ord.totalPay', 'ord.balance', 'ord.status', 'ord.created_at', 'bra.name AS nameB')
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
        $paymentForms   = PaymentForm::get();
        $paymentMethods = PaymentMethod::get();
        $banks          = Bank::get();
        $cards          = Card::get();
        $branch         = $request->session()->get('branch');
        $retentions     = Retention::get();
        $payEvents      = Payevent::where('status', '=', 'PENDIENTE')->get();

        $branchProducts = BranchProduct::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.salePrice', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', '=', $request->session()->get('branch'))
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'ACTIVE')
        ->get();
        return view('admin.order.create', compact('customers', 'branchProducts', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'regimes', 'paymentForms', 'paymentMethods', 'retentions', 'banks', 'cards', 'payEvents'));
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
            $order->totalIva          = $request->totalIva;
            $order->totalPay          = $request->totalPay;
            $order->pay               = $pay;
            $order->balance           = $request->totalPay;
            $order->retention         = $request->retention;
            $order->save();
            //si hay Abono registra abono
            if($pay > 0){
                $payEven = $request->abv;
                if ($payEven != 0) {
                    //si el abono es un abono de otro documento aplica abono evento
                    $payEvent = Payevent::findOrFail($payEven);
                    $payEvent->destination = $order->id;
                    $payEvent->status      = 'APLICADO';
                    $payEvent->update();
                    $boxy = Salebox::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
                    $inPayEvent = $boxy->inPayEvent + $pay;

                    $saleBox = Salebox::findOrFail($boxy->id);
                    $saleBox->inPayEvent = $inPayEvent;
                    $saleBox->update();
                } else {
                    //si es un abono nuevo aplica abono pedido
                    $payOrder = new Payorder();
                    $payOrder->pay       = $pay;
                    $payOrder->balanceOrder = $order->balance;
                    $payOrder->user_id   = $order->user_id;
                    $payOrder->branch_id = $order->branch_id;
                    $payOrder->order_id  = $order->id;
                    $payOrder->save();
                    //Registrando la tabla de metodos de pago abono pedido
                    $paymentmethodPayorder = new PaymentmethodPayorder();
                    $paymentmethodPayorder->payorder_id        = $payOrder->id;
                    $paymentmethodPayorder->payment_method_id  = $request->payment_method_id;
                    $paymentmethodPayorder->bank_id            = $request->bank_id;
                    $paymentmethodPayorder->card_id            = $request->card_id;
                    $paymentmethodPayorder->payevent_id        = $request->payEvent_id;
                    $paymentmethodPayorder->payment            = $request->pay;
                    $paymentmethodPayorder->transaction        = $request->transaction;
                    $paymentmethodPayorder->save();
                }
                //extrayendo variables
                $mp = $request->paiment_method_id;
                $boxy = Salebox::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
                $inOrder = $boxy->inOrder + $pay;
                $inOrderCash = $boxy->inOrderCash;
                $inPayCash = $boxy->inPayCash;
                $inPay = $boxy->inPay + $pay;
                $out = $boxy->outCash;

                $cash = $boxy->cash;
                //si hay medio de pago
                if($mp == 1){
                    $inOrderCash += $pay;
                    $inPayCash += $pay;
                    $cash += $pay;
                }
                $totale = $cash - $out;
                //Actualizando la caja
                $salebox = Salebox::findOrFail($boxy->id);
                $salebox->inOrderCash = $inOrderCash;
                $salebox->inOrder     = $inOrder;
                $salebox->inPayCash   = $inPayCash;
                $salebox->inPay       = $inPay;
                $salebox->cash        = $cash;
                $salebox->total       = $totale;
                $salebox->update();
            }
            $cont = 0;

            while($cont < count($product_id)){
                //registrando la tabla de orders y productos
                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub   = $subtotal * $iva[$cont]/100;

                $orderProduct = new OrderProduct();
                $orderProduct->order_id   = $order->id;
                $orderProduct->product_id = $idP[$cont];
                $orderProduct->quantity   = $quantity[$cont];
                $orderProduct->price      = $price[$cont];
                $orderProduct->iva        = $iva[$cont];
                $orderProduct->subtotal   = $subtotal;
                $orderProduct->ivasubt    = $ivasub;
                $orderProduct->save();
                //obteniendo datos de sucursal
                $branchProducts = BranchProduct::where('product_id', '=', $orderProduct->product_id)
                ->where('branch_id', '=', $order->branch_id)
                ->first();

                $id = $branchProducts->id;
                $orderProducts = $branchProducts->orderProduct + $orderProduct->quantity;
                //Actualizando la tabla sucursal productos
                $branchPro = BranchProduct::findOrFail($id);
                $branchPro->orderProduct = $orderProducts;
                $branchPro->update();

                $cont++;
            }

            //obteniendo datos de la caja
            $boxy = Salebox::where('user_id', '=', $order->user_id)->where('status', '=', 'ABIERTA')->first();
            $ord = $boxy->order;
            $tpv = $order->totalPay;
            $nord = $ord + $tpv;
            //Actualizando caja
            $salebox = Salebox::findOrFail($boxy->id);
            $salebox->order = $nord;
            $salebox->update();

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
        ->select('ord.id', 'ord.due_date', 'ord.items', 'ord.total', 'ord.totalIva', 'ord.totalPay', 'ord.pay', 'ord.balance', 'ord.retention', 'ord.status', 'ord.created_at', 'use.name', 'bra.name AS nameB', 'cus.name AS nameC', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $id)
        ->first();

        /*mostrar detalles*/
        $orderProducts = OrderProduct::from('order_products AS op')
        ->join('products AS pro', 'op.product_id', '=', 'pro.id')
        ->join('orders AS ord', 'op.order_id', '=', 'ord.id')
        ->select('op.quantity', 'op.price', 'op.subtotal', 'ord.id', 'ord.total', 'ord.totalIva', 'ord.totalPay', 'pro.name')
        ->where('op.order_id', '=', $id)
        ->get();

        return view('admin.order.show', compact('orders', 'orderProducts'));
    }

    public function showfact($id)
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
        \session()->put('totalIva', $orders->totalIva, 60 * 24 *365);
        \session()->put('totalPay', $orders->totalPay, 60 * 24 *365);
        \session()->put('status', $orders->estado, 60 * 24 *365);
        return redirect('orderProduct/create');
     }

     public function showPayOrder($id)
     {

        $orders = Order::findOrFail($id);
        \session()->put('order', $orders->id, 60 * 24 * 365);
        \session()->put('branch_id', $orders->branch_id, 60 * 24 *365);
        \session()->put('customer_id', $orders->customer_id, 60 * 24 *365);
        \session()->put('due_date', $orders->due_date, 60 * 24 *365);
        \session()->put('total', $orders->total, 60 * 24 *365);
        \session()->put('balance', $orders->totalPay, 60 * 24 *365);
        \session()->put('status', $orders->estado, 60 * 24 *365);

        return redirect('payOrder');
     }

     public function showPdfOrder(Request $request,$id)
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
        ->select('ord.id', 'ord.created_at', 'ord.due_date', 'ord.total', 'bra.name AS nameB', 'bra.address as addressB', 'bra.phone', 'bra.mobile', 'cus.name AS nameC', 'cus.document_id', 'cus.number', 'cus.address', 'cus.phone', 'cus.email', 'doc.initials', 'reg.name AS nameR', 'mun.name AS nameM', 'tax.description', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('ord.id', '=', $id)->first();

        $orderProduct = OrderProduct::from('order_products AS op')
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
        ->select('ord.id', 'ord.total', 'ord.totalIva', 'ord.totalPay', 'cat.iva')
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
        $view = \view('admin.order.pdf', compact('order', 'days', 'orderProduct', 'company', 'logo', 'ordery'))->render();
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
            $payEvent = new Payevent();
            $payEvent->origin = $order->id;
            $payEvent->destination = null;
            $payEvent->document = 'PEDIDO';
            $payEvent->pay = $order->pay;
            $payEvent->save();
        }

        $order = Order::findOrFail($id);
        $order->totalPay = 0;
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
