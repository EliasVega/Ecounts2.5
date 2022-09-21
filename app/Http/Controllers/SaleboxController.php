<?php

namespace App\Http\Controllers;

use App\Models\Salebox;
use App\Http\Requests\StoreSaleboxRequest;
use App\Http\Requests\UpdateSaleboxRequest;
use App\Models\Branch;
use App\Models\Cashout;
use App\Models\Codverif;
use App\Models\Invoice;
use App\Models\Ncinvoice;
use App\Models\Ndinvoice;
use App\Models\Order;
use App\Models\Payinvoice;
use App\Models\Payorder;
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
                $saleboxes = Salebox::from('saleboxes AS sal')
                ->join('users AS use', 'sal.user_id', '=', 'use.id')
                ->join('branches AS bra', 'sal.branch_id', '=', 'bra.id')
                ->select('sal.id', 'sal.cashbox', 'sal.cash', 'sal.out', 'sal.total', 'sal.status', 'sal.created_at', 'use.name', 'bra.name as nameB')
                ->get();
            } else {
                $saleboxes = Salebox::from('saleboxes AS sal')
                ->join('users AS use', 'sal.user_id', '=', 'use.id')
                ->join('branches AS bra', 'sal.branch_id', '=', 'bra.id')
                ->select('sal.id', 'sal.cashbox', 'sal.cash', 'sal.out', 'sal.total', 'sal.status', 'sal.created_at', 'use.name', 'bra.name as nameB')
                ->where('sal.user_id', '=', Auth::user()->id)
                ->get();
            }
            return datatables()
            ->of($saleboxes)
            ->editColumn('created_at', function(Salebox $salebox){
                return $salebox->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/saleBox/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }

            return view('admin.saleBox.index');
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

        return view("admin.saleBox.create", compact('users', 'branches'));
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
        $open = $request->userOpen_id;
        $verify = $request->codVerifOpen;
        $codVerif = Codverif::select('id', 'code')->where('user_id', '=', $open)->first();
        $openBox = Salebox::where('user_id', '=', $user)->where('status', '=', 'ABIERTA')->first();

        if($codVerif == null){
            return redirect("saleBox")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($codVerif->code != $verify) {
            return redirect("saleBox")->with('warning', 'Error en codigo de verificacion');
        } elseif($openBox) {
            return redirect("saleBox")->with('warning', 'Usuario ya tiene una salebox Abierta');
        } else {
            $salebox = new Salebox();
            $salebox->user_id       = $user;
            $salebox->userOpen_id   = $request->userOpen_id;
            $salebox->userClose_id  = $request->userClose_id;
            $salebox->branch_id     = $branch;
            $salebox->cashBox       = $request->cashBox;
            $salebox->inOrderCash   = 0;
            $salebox->inOrder       = 0;
            $salebox->inInvoiceCash = 0;
            $salebox->inInvoice     = 0;
            $salebox->inPayCash     = 0;
            $salebox->inPay         = 0;
            $salebox->inPayEvent    = 0;
            $salebox->outCash       = 0;
            $salebox->cash          = $request->cashBox;
            $salebox->out           = 0;
            $salebox->total         = $request->cashBox;
            $salebox->sale          = 0;
            $salebox->order         = 0;
            $salebox->codVerifOpen  = $request->codVerifOpen;
            $salebox->codVerifClose = null;
            $salebox->save();
        }
        return redirect("saleBox")->with('success', 'Caja creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salebox  $salebox
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Auth::user()->role_id;
        $user = Auth::user()->id;
        $cause = Auth::user()->name;
        $saleBox = Salebox::findOrFail($id);
        $from = $saleBox->created_at;
        $to = $saleBox->updated_at;

        if ($users == 1 || $users == 2) {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.totalPay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $saleBox->user_id)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.totalPay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $saleBox->user_id)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->select('ni.id', 'ni.invoice', 'ni.totalPay', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $saleBox->user_id)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.totalPay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $saleBox->user_id)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $nd){
                $totalnd += $nd->totalPay;
            }

            $payOrders = Payorder::from('payorders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $saleBox->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $payInvoices = Payinvoice::from('payinvoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $saleBox->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $cashOuts = Cashout::from('cashouts AS cas')
            ->join('saleboxes AS sai', 'cas.salebox_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $saleBox->user_id)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
        } else {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.totalPay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $user)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.totalPay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $user)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->select('ni.id', 'ni.invoice', 'ni.totalPay', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $user)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.totalPay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $user)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $nd){
                $totalnd += $nd->totalPay;
            }

            $payOrders = Payorder::from('payorders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $payInvoices = Payinvoice::from('payinvoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();

            $cashOuts = Cashout::from('cashouts AS cas')
            ->join('saleboxes AS sai', 'cas.salebox_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $user)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
        }

        return view('admin.saleBox.show', compact('saleBox', 'invoices', 'orders', 'ncinvoices', 'ndinvoices', 'totalnd', 'payOrders', 'payInvoices', 'cashOuts'));
    }

    public function showPos($id)
    {
        $user = Auth::user()->id;
        $users = User::findOrFail($user);
        $cause = Auth::user()->name;
        $admins = $users->role_id;
        $saleBox = Salebox::findOrFail($id);
        $from = $saleBox->created_at;
        $to = $saleBox->updated_at;
        $totalInvoice = 0;
        $totalOrder = 0;
        $totalNcinv = 0;
        $totalNdinv = 0;
        $totalPayOrder = 0;
        $totalPayInv = 0;
        $totalOut = 0;

        if ($admins == 1 || $admins == 2) {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.totalPay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $saleBox->user_id)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            foreach($invoices AS $inv){
                $totalInvoice += $inv->totalPay;
            }
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.totalPay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $saleBox->user_id)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();
            foreach($orders AS $ord){
                $totalOrder += $ord->totalPay;
            }

            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->select('ni.id', 'ni.invoice', 'ni.totalPay', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $saleBox->user_id)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();
            foreach($ncinvoices AS $nci){
                $totalNcinv += $nci->totalPay;
            }

            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.totalPay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $saleBox->user_id)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnd = 0;
            foreach($ndinvoices AS $ndi){
                $totalNdinv += $ndi->totalPay;
            }

            $payOrders = Payorder::from('payorders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $saleBox->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($payOrders AS $pay){
                $totalPayOrder += $pay->payment;
            }

            $payInvoices = Payinvoice::from('payinvoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $saleBox->user_id)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($payInvoices AS $pinv){
                $totalPayInv += $pinv->Pay;
            }

            $cashOuts = Cashout::from('cashouts AS cas')
            ->join('saleboxes AS sai', 'cas.salebox_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $saleBox->user_id)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
            foreach($cashOuts AS $cas){
                $totalOut += $cas->payment;
            }
        } else {
            $invoices = Invoice::from('invoices AS inv')
            ->join('users AS use', 'inv.user_id', 'use.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.invoice', 'inv.status', 'inv.pay', 'inv.balance', 'inv.totalPay', 'inv.created_at', 'cus.name')
            ->where('inv.user_id', '=', $user)
            ->whereBetween('inv.created_at', [$from, $to])
            ->get();
            foreach($invoices AS $inv){
                $totalInvoice += $inv->totalPay;
            }
            $orders = Order::from('orders AS ord')
            ->join('users AS use', 'ord.user_id', 'use.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('ord.id', 'ord.status', 'ord.pay', 'ord.balance', 'ord.totalPay', 'ord.created_at', 'cus.name')
            ->where('ord.user_id', '=', $user)
            ->whereBetween('ord.created_at', [$from, $to])
            ->get();
            foreach($orders AS $ord){
                $totalOrder += $ord->totalPay;
            }
            $ncinvoices = Ncinvoice::from('ncinvoices AS ni')
            ->join('users AS use', 'ni.user_id', 'use.id')
            ->join('customers AS cus', 'ni.customer_id', 'cus.id')
            ->select('ni.id', 'ni.invoice', 'ni.totalPay', 'ni.created_at', 'cus.name')
            ->where('ni.user_id', '=', $user)
            ->whereBetween('ni.created_at', [$from, $to])
            ->get();
            foreach($ncinvoices AS $nci){
                $totalNcinv += $nci->totalPay;
            }
            $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
            ->join('users AS use', 'nd.user_id', 'use.id')
            ->join('customers AS cus', 'nd.customer_id', 'cus.id')
            ->join('invoices AS inv', 'nd.invoice_id', 'inv.id')
            ->select('nd.id', 'inv.invoice', 'nd.totalPay', 'nd.created_at', 'cus.name')
            ->where('nd.user_id', '=', $user)
            ->whereBetween('nd.created_at', [$from, $to])
            ->get();
            $totalnNdinv = 0;
            foreach($ndinvoices AS $ndi){
                $totalNdinv += $ndi->totalPay;
            }

            $payOrders = Payorder::from('payorders AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('orders AS ord', 'pay.order_id', 'ord.id')
            ->join('customers AS cus', 'ord.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'ord.id AS idO', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($payOrders AS $pay){
                $totalPayOrder += $pay->payment;
            }
            $payInvoices = Payinvoice::from('payinvoices AS pay')
            ->join('users AS use', 'pay.user_id', 'use.id')
            ->join('invoices AS inv', 'pay.invoice_id', 'inv.id')
            ->join('customers AS cus', 'inv.customer_id', 'cus.id')
            ->select('pay.id', 'pay.pay', 'pay.created_at', 'inv.invoice', 'cus.name')
            ->where('pay.user_id', '=', $user)
            ->whereBetween('pay.created_at', [$from, $to])
            ->get();
            foreach($payInvoices AS $pinv){
                $totalPayInv += $pinv->Pay;
            }
            $cashOuts = Cashout::from('cashouts AS cas')
            ->join('saleboxes AS sai', 'cas.salebox_id', 'sai.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'usa.name')
            ->where('cas.user_id', '=', $user)
            ->whereBetween('cas.created_at', [$from, $to])
            ->get();
            foreach($cashOuts AS $cas){
                $totalOut += $cas->payment;
            }
        }

        $view = \view('admin.saleBox.showpos', compact('saleBox', 'invoices', 'orders', 'ncinvoices', 'ndinvoices', 'totalNdinv', 'payOrders', 'payInvoices', 'cashOuts', 'users', 'totalInvoice', 'totalOrder', 'totalNcinv', 'totalNdinv', 'totalPayOrder', 'totalPayInv', 'totalOut', 'payOrders', 'payInvoices', 'cashOuts'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,497.64));

        return $pdf->stream('reporteCaja.pdf');
    }

    public function showOut( $id)
    {
        $saleBox = Salebox::findOrFail($id);
        \Session::put('saleBox', $saleBox->id, 60 * 24 * 365);
        \Session::put('branch', $saleBox->branch_id, 60 * 24 * 365);
        \Session::put('user', $saleBox->user_id, 60 * 24 * 365);

        if($saleBox->status == 'CERRADA'){
            return redirect("saleBox")->with('warning', 'Esta Caja ya esta cerrada');
        }

        return redirect('cashOut');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salebox  $salebox
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saleBox = Salebox::findOrFail($id);
        $users = User::where('id', '!=', 1)->get();
        return view('admin.saleBox.edit', compact('saleBox', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaleboxRequest  $request
     * @param  \App\Models\Salebox  $salebox
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleboxRequest $request, $id)
    {
        $close = $request->userclose_id;
        $verific = $request->codverclose;
        $codverif = Codverif::select('id', 'code')->where('user_id', '=', $close)->first();
        $boxClose = Salebox::select('status')->where('id', '=', $id)->first();

        if($codverif == null){
            return redirect("saleBox")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($codverif->code != $verific) {
            return redirect("saleBox")->with('warning', 'Error en codigo de verificacion');
        } elseif ($boxClose->status == 'CERRADA') {
            return redirect("saleBox")->with('warning', 'Esta caja ya fue cerrada Anteriormente');
        } else {
            $saleBox = Salebox::findOrFail($id);
            $saleBox->userClose_id  = $request->userClose_id;
            $saleBox->codVerClose   = $request->codVerClose;
            $saleBox->status         = 'CERRADA';
            $saleBox->update();
        }
        return redirect("saleBox")->with('success', 'Caja cerrada Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salebox  $salebox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salebox $salebox)
    {
        //
    }
}
