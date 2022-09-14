<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\BranchProduct;
use App\Models\Card;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Document;
use App\Models\Indicator;
use App\Models\InvoiceProduct;
use App\Models\Kardex;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Payevent;
use App\Models\Payinvoice;
use App\Models\PayinvoicePaymentmethod;
use App\Models\PaymentForm;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\ProductBranch;
use App\Models\Regime;
use App\Models\Retention;
use App\Models\Salebox;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
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
                $invoices = Invoice::from('Invoices AS inv')
                ->join('branches AS bra', 'inv.brach_id', '=', 'bra.id')
                ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
                ->select('inv.id', 'inv.totalPay', 'inv.balance','inv.status', 'inv.created_at', 'inv.status', 'cus.name', 'bra.name AS nameB')
                ->get();
            } else {
                $invoices = Invoice::from('invoices AS inv')
                ->join('users AS use', 'inv.user_id', '=', 'use.id')
                ->join('branches AS bra', 'inv.branch_id', '=', 'bra.id')
                ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
                ->select('inv.id', 'inv.totalPay', 'inv.balance','inv.status', 'inv.created_at',  'cus.name', 'bra.name AS nameB')
                ->where('inv.branch_id', '=', $request->session()->get('branch'))
                ->where('use.id', '=', Auth::user()->id)
                ->where('use.status', '=', 'ACTIVO')
                ->get();
            }
            return datatables()
            ->of($invoices)
            ->editColumn('created_at', function(Invoice $invoice){
                return $invoice->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/invoice/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        if ($branch->id == 1) {
            return redirect('branch')->with('warning', 'No puede realizar ventas desde Bodega');
        } else {
            return view('admin.invoice.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $customers = Customer::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $regimes = Regime::get();
        $taxes = Tax::get();
        $paymentForms = PaymentForm::get();
        $paymentMethods = PaymentMethod::get();
        $retentions = Retention::get();
        $banks = Bank::get();
        $cards = Card::get();
        $branch = $request->session()->get('branch');
        $payEvents   = Payevent::where('status', '=', 'PENDIENTE')->get();
        $branchProducts = BranchProduct::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.salePrice', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', '=', $request->session()->get('branch'))
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'ACTIVE')
        ->get();
        return view('admin.invoice.create', compact('customers', 'branchProducts', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'regimes', 'paymentForms', 'paymentMethods', 'retentions', 'banks', 'cards', 'payEvents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        try{
            DB::beginTransaction();

            /*$productoinvoices = count(Productoinvoice::where('invoice_id', '=', 30)->get());
         dd($productoinvoices);*/

            $indicator   = Indicator::where('id', '=', 1)->first();
            $number      = $indicator->from;
            $inv      = count(Invoice::get());
            $invoicey  = $number + $inv;
            $invoicey  ++;

            $product_id = $request->product_id;
            $quantity   = $request->quantity;
            $price      = $request->price;
            $iva        = $request->iva;
            $idP        = $request->idP;
            $pay        = $request->pay;

            $invoice                    = new Invoice();
            $invoice->user_id           = Auth::user()->id;
            $invoice->branch_id         = $request->session()->get('branch');
            $invoice->customer_id       = $request->customer_id;
            $invoice->payment_form_id   = $request->payment_form_id;
            $invoice->payment_method_id = $request->payment_method_id;
            $invoice->retention_id      = $request->retention_id;
            $invoice->invoice           = $invoicey;
            $invoice->tipDoc            = '01';
            $invoice->tipOpe            = '10';
            $invoice->due_date          = $request->due_date;
            $invoice->items             = count($product_id);
            $invoice->total             = $request->total;
            $invoice->totalIva          = $request->totalIva;
            $invoice->totalPay          = $request->totalPay;
            $invoice->pay               = $pay;
            $invoice->balance           = $request->totalPay;
            $invoice->retention         = $request->retention;
            $invoice->save();
            if($pay > 0){
                $payEven = $request->abv;
                if ($payEven != 0) {
                    $payEvent              = Payevent::findOrFail($payEven);
                    $payEvent->destination = $invoice->invoice;
                    $payEvent->status      = 'APLICADO';
                    $payEvent->update();

                    $boxy = Salebox::where('user_id', '=', $invoice->user_id)->where('status', '=', 'ABIERTA')->first();
                    $inPayEvent = $boxy->inPayEvent + $pay;

                    $saleBox = Salebox::findOrFail($boxy->id);
                    $saleBox->inPayEvent = $inPayEvent;
                    $saleBox->update();
                } else {
                    $payInvoice             = new Payinvoice();
                    $payInvoice->pay        = $pay;
                    $payInvoice->balanceInvoice = $invoice->balance;
                    $payInvoice->user_id    = $invoice->user_id;
                    $payInvoice->branch_id  = $invoice->branch_id;
                    $payInvoice->invoice_id = $invoice->id;
                    $payInvoice->save();

                    $payinvoicePaymethod                     = new PayinvoicePaymentmethod();
                    $payinvoicePaymethod->payinvoice_id      = $payInvoice->id;
                    $payinvoicePaymethod->payment_method_id  = $request->payment_method_id;
                    $payinvoicePaymethod->bank_id            = $request->bank_id;
                    $payinvoicePaymethod->card_id            = $request->card_id;
                    $payinvoicePaymethod->payevent_id        = $request->payEvent_id;
                    $payinvoicePaymethod->payment            = $request->pay;
                    $payinvoicePaymethod->transaction        = $request->transaction;

                    $payinvoicePaymethod->save();

                }

                $mp = $request->payment_method_id;

                $boxy = Salebox::where('user_id', '=', $invoice->user_id)->where('status', '=', 'ABIERTA')->first();
                $inInvoice = $boxy->inInvoice + $pay;
                $inInvoiceCash = $boxy->inInvoiceCash;
                $inPayCash = $boxy->inPayCash;
                $inPay = $boxy->inPay + $pay;
                $cash = $boxy->cash;
                $out = $boxy->outCash;
                if($mp == 1){
                    $inInvoiceCash += $pay;
                    $inPayCash += $pay;
                    $cash += $pay;
                }
                $totale = $cash - $out;

                $saleBox = Salebox::findOrFail($boxy->id);
                $saleBox->inInvoiceCash = $inInvoiceCash;
                $saleBox->inInvoice = $inInvoice;
                $saleBox->inPayCash = $inPayCash;
                $saleBox->inPay = $inPay;
                $saleBox->cash = $cash;
                $saleBox->total = $totale;
                $saleBox->update();
            }

            $cont = 0;

            while($cont < count($product_id)){

                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub = $subtotal * $iva[$cont]/100;
                $item = $cont + 1;
                $prodid = $product_id[$cont];

                $invoiceProduct = new InvoiceProduct();
                $invoiceProduct->invoice_id    = $invoice->id;
                $invoiceProduct->product_id = $idP[$cont];
                $invoiceProduct->quantity    = $quantity[$cont];
                $invoiceProduct->price      = $price[$cont];
                $invoiceProduct->iva         = $iva[$cont];
                $invoiceProduct->subtotal = $subtotal;
                $invoiceProduct->ivasubt = $ivasub;
                $invoiceProduct->item = $item;
                $invoiceProduct->save();

                $branchProducts = BranchProduct::findOrFail($prodid);
                $id = $branchProducts->id;
                $prestock = $branchProducts->stock;
                $stock = $prestock - $invoiceProduct->quantity;

                $branchProduct = BranchProduct::findOrFail($id);
                $branchProduct->stock = $stock;
                $branchProduct->update();

                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $invoiceProduct->product_id)
                ->first();

                $id = $products->id;
                $stockardex = $products->stock;

                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $invoice->branch_id;
                $kardex->operation = 'VENTA';
                $kardex->number = $invoice->invoice;
                $kardex->quantity = $quantity[$cont];
                $kardex->stock = $stockardex;
                $kardex->save();

                $cont++;
            }
            $boxy = Salebox::where('user_id', '=', $invoice->user_id)->where('status', '=', 'ABIERTA')->first();
            $inv = $boxy->sale;
            $tpv = $invoice->totalPay;
            $ninv = $inv + $tpv;

            $saleBox = Salebox::findOrFail($boxy->id);
            $saleBox->sale = $ninv;
            $saleBox->update();


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
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoices = Invoice::from('invoices AS inv')
        ->join('users as use', 'inv.user_id', 'use.id')
        ->join('branches AS bra', 'inv.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->join('payment_forms AS pf', 'inv.payment_form_id', '=', 'pf.id')
        ->join('payment_methods as pm', 'inv.payment_method_id', '=', 'pm.id')
        ->select('inv.invoice', 'inv.due_date', 'inv.total', 'inv.totalIva', 'inv.retention', 'inv.totalPay', 'inv.created_at', 'bra.name as nameB', 'cus.name as nameC', 'pf.name as namePF', 'pm.name as namePM', 'use.name')
        ->where('inv.id', '=', $id)->first();

        /*mostrar detalles*/
        $invoiceProducts = InvoiceProduct::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->select('ip.quantity', 'ip.price', 'ip.subtotal', 'inv.id', 'inv.total', 'inv.totalIva', 'inv.totalPay', 'pro.name', 'cus.name AS nameC')
        ->where('ip.invoice_id', '=', $id)
        ->get();

        return view('admin.invoice.show', compact('invoices', 'invoiceProducts'));
    }

    public function showInvoice($id)
     {

        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('company_id', $invoices->company_id, 60 * 24 *365);
        /*
        \session()->put('sede_id', $invoices->sede_id, 60 * 24 *365);
        \session()->put('cliente_id', $invoices->cliente_id, 60 * 24 *365);
        \session()->put('formapago_id', $invoices->formapago_id, 60 * 24 *365);
        \session()->put('mediopago_id', $invoices->mediopago_id, 60 * 24 *365);
        \session()->put('numFac', $invoices->numFac, 60 * 24 *365);
        \session()->put('tipDoc', $invoices->tipDoc, 60 * 24 *365);
        \session()->put('tipOpe', $invoices->tipOpe, 60 * 24 *365);
        \session()->put('fecVen', $invoices->fecVen, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('total_iva', $invoices->total_iva, 60 * 24 *365);
        \session()->put('total_pagar', $invoices->total_pagar, 60 * 24 *365);
        \session()->put('estado', $invoices->estado, 60 * 24 *365);*/
        return redirect('admin/factura/show');
     }

     public function showNdinvoice($id)
     {
        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoices->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoices->iva, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);
        return redirect('ndinvoice/create');
     }

     public function showNcinvoice($id)
     {
        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoices->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoices->iva, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);
        return redirect('ncinvoice/create');
     }

     public function showPayinvoice($id)
     {

        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('due_date', $invoices->due_date, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('totalIva', $invoices->totalIva, 60 * 24 *365);
        \session()->put('totalPayr', $invoices->total_Pay, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);

        return redirect('payInvoice');
     }

     public function showPdfinvoice(Request $request, $id)
    {
        $invoice = Invoice::from('invoices AS inv')
        ->join('branches AS bra', 'inv.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->join('documents AS doc', 'cus.document_id', '=', 'doc.id')
        ->join('regimes AS reg', 'cus.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'cus.tax_id', '=', 'tax.id')
        ->join('municipalities AS mun', 'cus.municipality_id', '=', 'mun.id')
        ->join('payment_forms AS pf', 'inv.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'inv.payment_method_id', 'pm.id')
        ->select('inv.id', 'inv.invoice', 'inv.created_at', 'inv.due_date',  'inv.total', 'bra.name AS nameS', 'bra.address AS addressB', 'bra.email', 'bra.phone', 'bra.mobile', 'cus.name AS namreC', 'cus.document_id', 'cus.number', 'cus.address', 'cus.email', 'doc.initials', 'inv.created_at', 'reg.name AS nameR', 'mun.name AS nameM', 'tax.description', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('inv.id', '=', $id)->first();

        $invoiceProducts = InvoiceProduct::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.id', 'inv.id AS idI', 'inv.created_at', 'inv.total', 'ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
        ->where('ip.invoice_id', '=', $id)
        ->get();

        $invoicy = InvoiceProduct::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.id', 'inv.id AS idI', 'inv.created_at', 'inv.total', 'inv.totalIva', 'inv.totalPay', 'ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
        ->where('ip.invoice_id', '=', $id)
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


        $indicators = Indicator::from('indicators AS ind')
        ->select('ind.prefix', 'ind.resolution', 'ind.from', 'ind.to')
        ->where('ind.id', '=', 1)
        ->first();

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->invoice;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.pdf', compact('invoice', 'days', 'invoiceProducts', 'company', 'logo', 'invoicy', 'indicators'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$invoicepdf.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
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
