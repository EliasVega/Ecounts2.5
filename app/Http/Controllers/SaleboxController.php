<?php

namespace App\Http\Controllers;

use App\Models\Sale_box;
use App\Http\Requests\StoreSaleboxRequest;
use App\Http\Requests\UpdateSaleboxRequest;
use App\Models\Branch;
use App\Models\Cash_out;
use App\Models\Cod_verif;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Ncinvoice;
use App\Models\Ndinvoice;
use App\Models\Order;
use App\Models\Pay_invoice;
use App\Models\Pay_order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SaleboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->role_id;
        if (request()->ajax()) {
            if ($user == 1 || $user == 2) {
                $sale_boxes = Sale_box::get();
                $sale_boxes = Sale_box::from('sale_boxes AS sal')
                ->join('users AS use', 'sal.user_id', '=', 'use.id')
                ->join('branches AS bra', 'sal.branch_id', '=', 'bra.id')
                ->select('sal.id', 'sal.cash_box', 'sal.cash', 'sal.out', 'sal.total', 'sal.status', 'sal.created_at', 'use.name', 'bra.name as nameB')
                ->get();
            } else {
                $sale_boxes = Sale_box::where('user_id', Auth::user()->id)->get();
                $sale_boxes = Sale_box::from('sale_boxes AS sal')
                ->join('users AS use', 'sal.user_id', '=', 'use.id')
                ->join('branches AS bra', 'sal.branch_id', '=', 'bra.id')
                ->select('sal.id', 'sal.cash_box', 'sal.cash', 'sal.out', 'sal.total', 'sal.status', 'sal.created_at', 'use.name', 'bra.name as nameB')
                ->where('sal.user_id', '=', Auth::user()->id)
                ->get();
            }
            return datatables()
            ->of($sale_boxes)
            ->editColumn('created_at', function(Sale_box $sale_box){
                return $sale_box->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/sale_box/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }

            return view('admin.sale_box.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', 1)->get();
        $branches = Branch::get();

        return view("admin.sale_box.create", compact('users', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSaleboxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleboxRequest $request)
    {
        $user = Auth::user()->id;
        $branch = $request->session()->get('branch');
        $open = $request->user_open_id;
        $verify = $request->cod_verif_open;
        $cod_verif = Cod_verif::select('id', 'code')->where('user_id', '=', $open)->first();
        $open_box = Sale_box::where('user_id', '=', $user)->where('status', '=', 'ABIERTA')->first();

        if($cod_verif == null){
            return redirect("sale_box")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($cod_verif->code != $verify) {
            return redirect("sale_box")->with('warning', 'Error en codigo de verificacion');
        } elseif($open_box) {
            return redirect("sale_box")->with('warning', 'Usuario ya tiene una sale_box Abierta');
        } else {
            $sale_box = new Sale_box();
            $sale_box->user_id           = $user;
            $sale_box->user_open_id      = $request->user_open_id;
            $sale_box->user_close_id     = $request->user_close_id;
            $sale_box->branch_id         = $branch;
            $sale_box->cash_box          = $request->cash_box;
            $sale_box->in_order_cash     = 0;
            $sale_box->in_order          = 0;
            $sale_box->in_invoice_cash   = 0;
            $sale_box->in_invoice        = 0;
            $sale_box->in_ndinvoice_cash = 0;
            $sale_box->in_ndinvoice      = 0;
            $sale_box->in_pay_cash       = 0;
            $sale_box->in_pay            = 0;
            $sale_box->in_pay_event      = 0;
            $sale_box->out_cash          = 0;
            $sale_box->cash              = $request->cash_box;
            $sale_box->out               = 0;
            $sale_box->total             = $request->cash_box;
            $sale_box->sale              = 0;
            $sale_box->order             = 0;
            $sale_box->cod_verif_open    = $request->cod_verif_open;
            $sale_box->cod_verif_close   = null;
            $sale_box->save();
        }
        return redirect("sale_box")->with('success', 'Caja creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale_box  $sale_box
     * @return \Illuminate\Http\Response
     */
    public function show_close($id)
    {
        $users    = Auth::user()->role_id;
        $user     = Auth::user()->id;
        $cause    = Auth::user()->name;
        $sale_box = Sale_box::findOrFail($id);
        $from     = $sale_box->created_at;
        $to       = $sale_box->updated_at;
        $produc = [];
        $cont = 0;
        $products = Product::all();
        foreach ($products as $key => $product ) {
            $invoice_products = Invoice_product::from('invoice_products as ip')
            ->join('invoices as inv', 'ip.invoice_id', 'inv.id')
            ->join('products as pro', 'ip.product_id', 'pro.id')
            ->select('pro.id', 'pro.name', 'ip.quantity', 'ip.ivasubt', 'ip.subtotal', 'ip.created_at')
            ->whereBetween('ip.created_at', [$from, $to])
            ->where('inv.user_id', $sale_box->user_id)
            ->where('ip.product_id', $product->id)
            ->sum('quantity');

            $iva = Invoice_product::from('invoice_products as ip')
            ->join('invoices as inv', 'ip.invoice_id', 'inv.id')
            ->join('products as pro', 'ip.product_id', 'pro.id')
            ->select('pro.id', 'pro.name', 'ip.quantity', 'ip.ivasubt', 'ip.subtotal', 'ip.created_at')
            ->whereBetween('ip.created_at', [$from, $to])
            ->where('inv.user_id', $sale_box->user_id)
            ->where('ip.product_id', $product->id)
            ->sum('ivasubt');

            if ($invoice_products) {
                $produc[$cont] = Product::findOrFail($product->id);
                $produc[$cont]->stock = $invoice_products;
                $produc[$cont]->price = $iva;
                $cont++;
            }
        }
        $sumtotal = Invoice_product::from('invoice_products as ip')
        ->join('invoices as inv', 'ip.invoice_id', 'inv.id')
        ->select('ip.subtotal', 'ip.created_at')
        ->where('inv.user_id', $sale_box->user_id)
        ->whereBetween('ip.created_at', [$from, $to])
        ->sum('subtotal');

        $ivasubt = Invoice_product::from('invoice_products as ip')
        ->join('invoices as inv', 'ip.invoice_id', 'inv.id')
        ->select('ip.subtotal', 'ip.created_at')
        ->where('inv.user_id', $sale_box->user_id)
        ->whereBetween('ip.created_at', [$from, $to])
        ->sum('ivasubt');

        $invoices = Invoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $invbalance = Invoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('balance');
        $invpay = Invoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('pay');

        $orders = Order::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $ordbalance = Order::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('balance');
        $ordpay = Order::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('pay');

        $ncinvoices = Ncinvoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $totalnc = Ncinvoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('total_pay');

        $ndinvoices = Ndinvoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $totalnd = Ndinvoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('total_pay');

        $pay_orders = Pay_order::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $sum_pay_orders = Pay_order::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('pay');
        $pay_invoices = Pay_invoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $sum_pay_invoices = Pay_invoice::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('pay');
        $cash_outs = Cash_out::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->get();
        $sum_pay_cashs = Cash_out::where('user_id', $sale_box->user_id)->whereBetween('created_at', [$from, $to])->sum('payment');


        return view('admin.sale_box.show_close', compact('sale_box', 'invoices', 'orders', 'ncinvoices', 'ndinvoices', 'totalnd', 'pay_orders', 'pay_invoices', 'cash_outs', 'products', 'sumtotal', 'ivasubt', 'produc', 'invpay', 'invbalance', 'ordpay', 'ordbalance', 'totalnc', 'sum_pay_orders', 'sum_pay_invoices', 'sum_pay_cashs'));
    }
    public function show($id)
    {
        $users = Auth::user()->role_id;
        $user = Auth::user()->id;
        $cause = Auth::user()->name;
        $sale_box = Sale_box::findOrFail($id);
        $from = $sale_box->created_at;
        $to = $sale_box->updated_at;

        if ($users == 1 || $users == 2) {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.total_pay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $sale_box->user_id)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.total_pay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $sale_box->user_id)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->join('invoices AS inv', 'ni.invoice_id', 'inv.id')
            ->select('ni.id', 'ni.total_pay', 'inv.invoice', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $sale_box->user_id)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.total_pay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $sale_box->user_id)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $nd){
                $totalnd += $nd->total_pay;
            }

            $pay_orders = Pay_order::from('pay_orders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $sale_box->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $sale_box->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $cash_outs = Cash_out::from('cash_outs AS cas')
            ->join('sale_boxes AS sai', 'cas.sale_box_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $sale_box->user_id)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
        } else {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.total_pay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $user)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.total_pay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $user)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->join('invoices AS inv', 'ni.invoice_id', 'inv.id')
            ->select('ni.id', 'ni.total_pay', 'inv.invoice', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $user)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.total_pay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $user)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $nd){
                $totalnd += $nd->total_pay;
            }

            $pay_orders = Pay_order::from('pay_orders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $cash_outs = Cash_out::from('cash_outs AS cas')
            ->join('sale_boxes AS sai', 'cas.sale_box_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $user)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
        }

        return view('admin.sale_box.show', compact('sale_box', 'invoices', 'orders', 'ncinvoices', 'ndinvoices', 'totalnd', 'pay_orders', 'pay_invoices', 'cash_outs'));
    }

    public function show_pos($id)
    {
        $user = Auth::user()->id;
        $users = User::findOrFail($user);
        $cause = Auth::user()->name;
        $admins = $users->role_id;
        $sale_box = Sale_box::findOrFail($id);
        $from = $sale_box->created_at;
        $to = $sale_box->updated_at;
        $total_invoice = 0;
        $total_order = 0;
        $total_ncinv = 0;
        $total_ndinv = 0;
        $total_pay_order = 0;
        $total_pay_inv = 0;
        $total_out = 0;

        if ($admins == 1 || $admins == 2) {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.total_pay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $sale_box->user_id)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            foreach($invoices AS $inv){
                $total_invoice += $inv->total_pay;
            }
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.total_pay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $sale_box->user_id)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();
            foreach($orders AS $ord){
                $total_order += $ord->total_pay;
            }

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->join('invoices AS inv', 'ni.invoice_id', 'inv.id')
            ->select('ni.id', 'ni.total_pay', 'inv.invoice', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $sale_box->user_id)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();
            foreach($ncinvoices AS $nci){
                $total_ncinv += $nci->total_pay;
            }

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.total_pay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $sale_box->user_id)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $ndi){
                $total_ndinv += $ndi->total_pay;
            }

            $pay_orders = Pay_order::from('pay_orders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $sale_box->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($pay_orders AS $pay){
                $total_pay_order += $pay->payment;
            }

            $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $sale_box->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($pay_invoices AS $pinv){
                $total_pay_inv += $pinv->Pay;
            }

            $cash_outs = Cash_out::from('cash_outs AS cas')
            ->join('sale_boxes AS sai', 'cas.sale_box_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $sale_box->user_id)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
            foreach($cash_outs AS $cas){
                $total_out += $cas->payment;
            }
        } else {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.total_pay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $user)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            foreach($invoices AS $inv){
                $total_invoice += $inv->total_pay;
            }
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.total_pay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $user)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();
            foreach($orders AS $ord){
                $total_order += $ord->total_pay;
            }
            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->join('invoices as inv', 'ni.invoice_id', 'inv.id')
            ->select('ni.id', 'ni.total_pay', 'inv.invoice', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $user)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();
            foreach($ncinvoices AS $nci){
                $total_ncinv += $nci->total_pay;
            }
            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.total_pay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $user)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $total_ndinv = 0;
            foreach($ndinvoices AS $ndi){
                $total_ndinv += $ndi->total_pay;
            }

            $pay_orders = Pay_order::from('pay_orders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($pay_orders AS $pay){
                $total_pay_order += $pay->payment;
            }
            $pay_invoices = Pay_invoice::from('pay_invoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($pay_invoices AS $pinv){
                $total_pay_inv += $pinv->Pay;
            }
            $cash_outs = Cash_out::from('cash_outs AS cas')
            ->join('sale_boxes AS sai', 'cas.sale_box_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $user)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
            foreach($cash_outs AS $cas){
                $total_out += $cas->payment;
            }
        }

        $view = \view('admin.sale_box.showpos', compact('sale_box', 'invoices', 'orders', 'ncinvoices', 'ndinvoices', 'total_ndinv', 'pay_orders', 'pay_invoices', 'cash_outs', 'users', 'total_invoice', 'total_order', 'total_ncinv', 'total_ndinv', 'total_pay_order', 'total_pay_inv', 'total_out', 'pay_orders', 'pay_invoices', 'cash_outs'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,497.64));

        return $pdf->stream('reporte_caja.pdf');
    }

    public function show_out( $id)
    {
        $sale_box = Sale_box::findOrFail($id);
        \Session::put('sale_box', $sale_box->id, 60 * 24 * 365);
        \Session::put('branch', $sale_box->branch_id, 60 * 24 * 365);
        \Session::put('user', $sale_box->user_id, 60 * 24 * 365);

        if($sale_box->status == 'CERRADA'){
            return redirect("sale_box")->with('warning', 'Esta Caja ya esta cerrada');
        }

        return redirect('cash_out');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale_box  $sale_box
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale_box = Sale_box::findOrFail($id);
        $users = User::where('id', '!=', 1)->get();
        return view('admin.sale_box.edit', compact('sale_box', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaleboxRequest  $request
     * @param  \App\Models\Sale_box  $sale_box
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleboxRequest $request, $id)
    {
        $close = $request->user_close_id;
        $verific = $request->cod_ver_close;
        $cod_verif = Cod_verif::select('id', 'code')->where('user_id', '=', $close)->first();
        $box_close = Sale_box::select('status')->where('id', '=', $id)->first();

        if($cod_verif == null){
            return redirect("sale_box")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($cod_verif->code != $verific) {
            return redirect("sale_box")->with('warning', 'Error en codigo de verificacion');
        } elseif ($box_close->status == 'CERRADA') {
            return redirect("sale_box")->with('warning', 'Esta caja ya fue cerrada Anteriormente');
        } else {
            $sale_box = Sale_box::findOrFail($id);
            $sale_box->user_close_id  = $request->userClose_id;
            $sale_box->cod_ver_close   = $request->cod_ver_close;
            $sale_box->status         = 'CERRADA';
            $sale_box->update();
        }
        return redirect("sale_box")->with('success', 'Caja cerrada Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale_box  $sale_box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale_box $sale_box)
    {
        //
    }
}
