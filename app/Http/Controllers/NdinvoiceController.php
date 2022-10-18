<?php

namespace App\Http\Controllers;

use App\Models\Ndinvoice;
use App\Http\Requests\StoreNdinvoiceRequest;
use App\Http\Requests\UpdateNdinvoiceRequest;
use App\Models\branch_product;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Kardex;
use App\Models\Ndinvoice_product;
use App\Models\Pay_event;
use App\Models\Pay_invoice;
use App\Models\Pay_invoice_Payment_method;
use App\Models\Product;
use App\Models\Product_branch;
use App\Models\Sale_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NdinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {

            $ndinvoices = Ndinvoice::from('ndinvoices as ndi')
            ->join('users as use', 'ndi.user_id', 'use.id')
            ->join('invoices as inv', 'ndi.invoice_id', 'inv.id')
            ->join('customers as cus', 'ndi.customer_id', 'cus.id')
            ->select('ndi.id', 'inv.id as idI', 'cus.name as nameC', 'ndi.total_pay', 'ndi.created_at', 'use.name')
            ->where('ndi.branch_id', '=', $request->session()->get('branch'))
            ->get();

            return datatables()
            ->of($ndinvoices)
            ->editColumn('created_at', function(Ndinvoice $ndinvoice){
                return $ndinvoice->created_at->format('yy-m-d');
            })
            ->addColumn('edit', 'admin/ndinvoice/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.ndinvoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $invoices = Invoice::from('invoices AS inv')
        ->join('customers AS cus', 'inv.customer_id', 'cus.id')
        ->select('inv.id', 'inv.customer_id', 'cus.name', 'inv.status')
        ->where('inv.id', '=', $request->session()->get('invoice'))->first();
        if ($invoices->status != 'ACTIVE') {
            return redirect("invoice")->with('warning', 'Esta Compra ya tiene una Nota Debito o Credito');
        }

        $invoice_products = Invoice_product::from('invoice_products AS ip')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'ip.invoice_id', 'ip.product_id', 'ip.quantity', 'ip.price', 'pro.name', 'pro.stock', 'inv.id AS idI', 'cat.iva')
        ->where('ip.invoice_id', '=', $request->session()->get('invoice'))->get();

        $products = Product::from('products AS pro')
        ->join('invoice_products AS ip', 'ip.product_id', '=', 'pro.id')
        ->select('pro.id', 'pro.name', 'ip.price')->get();

        return view('admin.ndinvoice.create', compact('invoices', 'products', 'invoice_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNdinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNdinvoiceRequest $request)
    {
        try{
            DB::beginTransaction();

            $pay = $request->pay;
            //crear tabla nota debito venta
            $ndinvoice = new Ndinvoice();
            $ndinvoice->user_id     = Auth::user()->id;
            $ndinvoice->branch_id   = $request->session()->get('branch');
            $ndinvoice->invoice_id  = $request->session()->get('invoice');
            $ndinvoice->customer_id = $request->customer_id;
            $ndinvoice->total       = $request->total;
            $ndinvoice->total_iva    = $request->total_iva;
            $ndinvoice->total_pay    = $request->total_pay;
            $ndinvoice->pay         = 0;
            $ndinvoice->balance     = $request->total_pay;
            $ndinvoice->save();

            //$invoice_product = InvoiceProduct::where('invoice_id', '=', $ndinvoice->invoice_id)->get();
            /*
            foreach($invoice_product AS $ip){
                $idp = $ip->product_id;
                $quant = $ip->quantity;
                //calcular cantidad para actualizar stock
                $prod = Product::findOrFail($idp);
                $stock = $prod->stock;
                $stocky = $stock + $quant;
                //Actualizar tabla producto stock
                $product = Product::findOrFail($idp);
                $product->stock = $stocky;
                $product->update();
                //Calcular valor para actualizar tabla branch_products
                $prods = branch_product::from('branch_products AS bp')
                ->select('bp.id', 'bp.stock', 'bp.product_id', 'bp.branch_id')
                ->where('bp.product_id', '=', $idp)
                ->where('bp.branch_id', '=', $ndinvoice->branch_id)
                ->first();
                $stockps = $prods->stock;
                $stockpsy = $stockps + $quant;
                dd($stockpsy);
                //Actualizando tabla Branch_products
                $branch_product = branch_product::where('id', '=', $prods->id);
                $branch_product->stock = $stockpsy;
                $branch_product->update();

            }*/
            /*
            if($pay > 0){
                $payEven = $request->payEvent;

                if ($payEven != null) {
                    $payEvent = Payevent::findOrFail($payEven);
                    $payEvent->destination = $ndinvoice->id;
                    $payEvent->status  = 'APLICADO';
                    $payEvent->update();
                } else {
                    $payInvoice          = new Payinvoice();
                    $payInvoice->user_id = $ndinvoice->user_id;
                    $payInvoice->branch_id = $ndinvoice->branch_id;
                    $payInvoice->invoice_id = $ndinvoice->id;
                    $payInvoice->pay = $request->pay;
                    $payInvoice->save();

                    $payinvoicePaymentMethod               = new PayinvoicePaymentmethod();
                    $payinvoicePaymentMethod->payInvoice_id   = $payInvoice->id;
                    $payinvoicePaymentMethod->payment_method_id  = $request->payment_method_id;
                    $payinvoicePaymentMethod->bank_id      = $request->bank_id;
                    $payinvoicePaymentMethod->card_id    = $request->card_id;
                    $payinvoicePaymentMethod->payEvent_id = $request->payEvent_id;
                    $payinvoicePaymentMethod->payment         = $request->pay;
                    $payinvoicePaymentMethod->transaction   = $request->transaction;
                    $payinvoicePaymentMethod->save();

                    $mp = $request->payment_method_id;

                    $boxy = Salebox::where('user_id', '=', $ndinvoice->user_id)->where('status', '=', 'ABIERTA')->first();
                    $inInvoice = $boxy->inInvoice + $pay;
                    $inInvoiceCash = $boxy->inInvoiceCash;
                    $inPayCash = $boxy->inPayCash;
                    $inPay = $boxy->inPay + $pay;
                    $cash = $boxy->cash;
                    $out = $boxy->cashOut;
                    if($mp == 1){
                        $inInvoiceCash += $pay;
                        $inPayCash += $pay;
                        $cash += $pay;
                    }
                    $totale = $cash - $out;

                    $salebox = Salebox::findOrFail($boxy->id);
                    $salebox->inInvoiceCash = $inInvoiceCash;
                    $salebox->inInvoice = $inInvoice;
                    $salebox->inPayCash = $inPayCash;
                    $salebox->inPay = $inPay;
                    $salebox->cash = $cash;
                    $salebox->total = $totale;
                    $salebox->update();
                }
            }
            */
            $product_id = $request->product_id;
            $quantity   = $request->quantity;
            $price      = $request->price;
            $stock      = $request->stock;
            //$invo = $request->session()->get('invoice');

            $cont = 0;

            while($cont < count($product_id)){
                //crear registro tabla ndinvoice_products
                $ndinvoice_product = new Ndinvoice_product();
                $ndinvoice_product->ndinvoice_id = $ndinvoice->id;
                $ndinvoice_product->product_id = $product_id[$cont];
                $ndinvoice_product->quantity = $quantity[$cont];
                $ndinvoice_product->price = $price[$cont];
                $ndinvoice_product->save();
                //calcular valores para registro kardex
                $products = Product::from('products as pro')
                ->join('categories as cat', 'pro.category_id', 'cat.id')
                ->select('pro.id', 'pro.price', 'pro.stock', 'cat.utility')
                ->where('pro.id', '=', $ndinvoice_product->product_id)
                ->first();

                //Calcular el valor para actualizar Branch_products
                $branch_products = Branch_product::from('branch_Products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.product_id', 'bp.branch_id', 'bp.stock', 'pro.id AS idP', 'bra.id')
                ->where('bp.product_id', '=', $ndinvoice_product->product_id)
                ->where('bp.branch_id', '=', $ndinvoice->branch_id)
                ->first();
                $id = $branch_products->idP;
                $prestock = $branch_products->stock;
                $stock = $prestock - $ndinvoice_product->quantity;
                //Actualizar tabla Branch Products
                $branch_product = Branch_product::where('branch_id', $ndinvoice->branch_id)->where('product_id', $ndinvoice_product->product_id)->first();
                $branch_product->stock = $stock;
                $branch_product->update();


                $id = $products->id;
                $stockardex = $products->stock;
                //crear registro en la tabla kardex
                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id  = $ndinvoice->branch_id;
                $kardex->operation  = 'ND_VENTA';
                $kardex->number     = $ndinvoice->id;
                $kardex->quantity   = $quantity[$cont];
                $kardex->stock      = $stockardex;
                $kardex->save();

                $cont++;
            }

            $boxy = Sale_box::where('user_id', '=', $ndinvoice->user_id)->where('status', '=', 'ABIERTA')->first();
            $invoicy = Invoice::where('id', '=', $request->session()->get('invoice'))->first();
            $total_pay = $invoicy->total_pay;
            $sale = $boxy->sale;
            $tpv = $ndinvoice->total_pay;
            $desc = $sale - $total_pay;
            $ninv = $desc + $tpv;

            $saleBox = Sale_box::findOrFail($boxy->id);
            $saleBox->sale = $ninv;
            $saleBox->update();

            $invoice = Invoice::findOrFail($invoicy->id);
            $invoice->pay = 0;
            $invoice->balance = 0;
            $invoice->total_pay = 0;
            $invoice->status = 'DEBIT_NOTE';
            $invoice->update();



            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('ndinvoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ndinvoice  $ndinvoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ndinvoices = Ndinvoice::from('ndinvoices AS nd')
        ->join('users as use', 'nd.user_id', 'use.id')
        ->join('branches AS bra', 'nd.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'nd.customer_id', '=', 'cus.id')
        ->join('invoices as inv', 'nd.invoice_id', '=', 'inv.id')
        ->select('nd.id', 'nd.total', 'nd.total_iva', 'nd.total_pay', 'nd.created_at', 'bra.name as nameB', 'cus.name as nameC', 'inv.invoice as nf', 'use.name')
        ->where('nd.id', '=', $id)->first();

        /*mostrar detalles*/
        $ndinvoice_products = Ndinvoice_product::from('ndinvoice_products AS np')
        ->join('products AS pro', 'np.product_id', '=', 'pro.id')
        ->join('ndinvoices AS ndi', 'np.ndinvoice_id', '=', 'ndi.id')
        ->select('np.quantity', 'np.price', 'ndi.total', 'ndi.total_iva', 'ndi.total_pay', 'pro.name')
        ->where('np.ndinvoice_id', '=', $id)
        ->get();

        return view('admin.ndinvoice.show', compact('ndinvoices', 'Ndinvoice_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ndinvoice  $ndinvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Ndinvoice $ndinvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNdinvoiceRequest  $request
     * @param  \App\Models\Ndinvoice  $ndinvoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNdinvoiceRequest $request, Ndinvoice $ndinvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ndinvoice  $ndinvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ndinvoice $ndinvoice)
    {
        //
    }
}
