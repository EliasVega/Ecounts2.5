<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Advance;
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
use App\Models\Pay_order;
use App\Models\Pay_order_payment_method;
use App\Models\Percentage;
use App\Models\Regime;
use App\Models\Retention;
use App\Models\Sale_box;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
                $orders = Order::get();
            } else {
                $orders = Order::where('branch_id', $request->session()->get('branch'))->where('user_id', Auth::user()->id)->get();
            }
            return DataTables::of($orders)
            ->addIndexColumn()
            ->addColumn('customer', function (Order $order) {
                return $order->customer->name;
            })
            ->addColumn('branch', function (Order $order) {
                return $order->branch->name;
            })
            ->editColumn('created_at', function(Order $order){
                return $order->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/order/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        if ($branch->id == 1) {
            return redirect('branch')->with('warning', 'No puede realizar ventas desde Bodega');
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
        $percentages     = Percentage::get();
        $pay_events      = Pay_event::where('status', '=', 'pendiente')->get();

        $branch_products = Branch_product::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', '=', $request->session()->get('branch'))
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'activo')
        ->get();
        return view('admin.order.create', compact('customers',
        'branch_products',
        'departments',
        'municipalities',
        'documents',
        'liabilities',
        'organizations',
        'taxes',
        'regimes',
        'payment_forms',
        'payment_methods',
        'percentages',
        'banks',
        'cards',
        'pay_events'));
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
            $idP          = $request->idP;
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
            $order->total_iva         = $request->total_iva;
            $order->total_pay         = $request->total_pay;
            $order->pay               = $pay;
            $order->balance           = $request->total_pay;
            $order->retention         = $request->retention;
            $order->save();
            //si hay Abono registra abono
            if($pay > 0){
                $adv = $request->advance;
                if ($adv != 0) {
                    $advance              = Advance::findOrFail( $request->advance_id);
                    $adv_total = $advance->balance - $adv;

                    $advance->destination = $order->id;
                    if ($adv_total == 0) {
                        $advance->status      = 'aplicado';
                    } else {
                        $advance->status      = 'parcial';
                    }
                    $advance->balance = $adv_total;
                    $advance->update();

                    $sale_box = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'open')->first();
                    $sale_box->in_advance += $pay;
                    $sale_box->update();
                } else {
                    //si es un abono nuevo aplica abono pedido
                    $pay_order = new Pay_order();
                    $pay_order->pay           = $pay;
                    $pay_order->balance_order = $order->balance - $pay;
                    $pay_order->user_id       = $order->user_id;
                    $pay_order->branch_id     = $order->branch_id;
                    $pay_order->order_id      = $order->id;
                    $pay_order->save();
                    //Registrando la tabla de metodos de pago abono pedido
                    $pay_order_payment_method = new Pay_order_payment_method();
                    $pay_order_payment_method->pay_order_id        = $pay_order->id;
                    $pay_order_payment_method->payment_method_id  = $request->payment_method_id;
                    $pay_order_payment_method->bank_id            = $request->bank_id;
                    $pay_order_payment_method->card_id            = $request->card_id;
                    $pay_order_payment_method->advance_id         = $request->advance_id;
                    $pay_order_payment_method->payment            = $request->pay;
                    $pay_order_payment_method->transaction        = $request->transaction;
                    $pay_order_payment_method->save();
                }
                //extrayendo variables
                $mp            = $request->payment_method_id;
                $boxy          = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'open')->first();
                $in_order      = $boxy->in_order + $request->total_pay;
                $in_order_cash = $boxy->in_order_cash;
                $in_pay_cash   = $boxy->in_pay_cash;
                $in_pay        = $boxy->in_pay + $pay;
                $out           = $boxy->out_cash;
                $cash          = $boxy->cash;
                //si hay medio de pago
                if($mp == 10){
                    $in_order_cash += $pay;
                    $in_pay_cash   += $pay;
                    $cash          += $pay;
                }
                $totale = $cash - $out;
                //Actualizando la caja
                $sale_box = Sale_box::findOrFail($boxy->id);
                $sale_box->in_order_cash = $in_order_cash;
                $sale_box->in_order      = $in_order;
                $sale_box->in_pay_cash   = $in_pay_cash;
                $sale_box->in_pay        = $in_pay;
                $sale_box->cash          = $cash;
                $sale_box->total         = $totale;
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
            $sale_box = Sale_box::where('user_id', '=', $order->user_id)->where('status', '=', 'open')->first();
            //Actualizando caja
            $sale_box->order += $request->total_pay;
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
        $order = Order::where('id', $id)->first();

        /*mostrar detalles*/
        $order_products = Order_product::where('order_id', $id)->get();

        return view('admin.order.show', compact('order', 'order_products'));
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
    \session()->put('total', $orders->total, 60 * 24 *365);
    \session()->put('total_iva', $orders->total_iva, 60 * 24 *365);
    \session()->put('total_pay', $orders->total_Pay, 60 * 24 *365);
    \session()->put('status', $orders->status, 60 * 24 *365);

    return redirect()->route('pay_order.create');
    }

    public function show_pdf_order(Request $request,$id)
    {
        $order = Order::where('id', $id)->first();
        $order_product = Order_product::where('order_id', $id)->get();
        $company = Company::where('id', 1)->first();

        $days = $order->created_at->diffInDays($order->due_date);
        $orderpdf = "PEDIDO-". $order->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.order.pdf', compact('order', 'days', 'order_product', 'company', 'logo'))->render();
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
        $balance = $order->balance;
        $valor = $order->total_pay;
        $total = $valor - $balance;

        if($balance != $valor){
            $advance = new Advance();
            $advance->origin = $order->id;
            $advance->destination = null;
            $advance->pay = $total;
            $advance->balance = $total;
            $advance->note = 'eliminacion pedido';
            $advance->status = 'pendiente';
            $advance->user_id = Auth::user()->id;
            $advance->branch_id = $order->branch->id;
            $advance->customer_id = $order->customer->id;
            $advance->save();
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
