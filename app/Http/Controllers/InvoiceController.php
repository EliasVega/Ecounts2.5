<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Advance;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\Branch_product;
use App\Models\Card;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Document;
use App\Models\Indicator;
use App\Models\Invoice_product;
use App\Models\Kardex;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Pay_event;
use App\Models\Pay_invoice;
use App\Models\Pay_invoice_Payment_method;
use App\Models\Payment_form;
use App\Models\Payment_method;
use App\Models\Percentage;
use App\Models\Product;
use App\Models\Product_branch;
use App\Models\Regime;
use App\Models\Retention;
use App\Models\Sale_box;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
                $invoices = Invoice::get();
            } else {
                $invoices = Invoice::where('branch_id', $request->session()->get('branch'))->where('user_id', Auth::user()->id)->get();
            }
            return DataTables::of($invoices)
            ->addIndexColumn()
            ->addColumn('customer', function (Invoice $invoice) {
                return $invoice->customer->name;
            })
            ->addColumn('branch', function (Invoice $invoice) {
                return $invoice->branch->name;
            })
            ->editColumn('created_at', function(Invoice $invoice){
                return $invoice->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/invoice/actions')
            ->rawColumns(['btn'])
            ->make(true);
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
        $branch = $request->session()->get('branch');

        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $customers = Customer::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $regimes = Regime::get();
        $taxes = Tax::get();
        $payment_forms = Payment_form::get();
        $payment_methods = Payment_method::get();
        $percentages = Percentage::get();
        $pay_events = Pay_event::get();
        $banks = Bank::get();
        $cards = Card::get();
        $advances   = Advance::where('status', '!=', 'aplicado')->get();
        /*$branch_products = Branch_product::where('branch_id', $branch)
        ->where('stock', '>', 0)
        ->where('products->status', '=', 'active')->get();*/

        $branch_products = Branch_product::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', $branch)
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'activo')
        ->get();
        return view('admin.invoice.create', compact(
            'customers',
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
            'pay_events',
            'banks',
            'cards',
            'advances'
        ));
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
            $invoice->percentage_id     = $request->percentage_id;
            $invoice->voucher_type_id   = 1;
            $invoice->document          = $invoicey; //Cuadrar esto para ccolocarle prefix y numero
            $invoice->type_document     = '01';
            $invoice->type_operation    = '10';
            $invoice->due_date          = $request->due_date;
            $invoice->items             = count($product_id);
            $invoice->total             = $request->total;
            $invoice->total_iva         = $request->total_iva;
            $invoice->total_pay         = $request->total_pay;
            $invoice->pay               = $request->pay;
            $invoice->balance           = $request->total_pay - $pay;
            $invoice->retention         = $request->retention;
            $invoice->save();
            if($pay > 0){
                $adv = $request->advance;

                if ($adv != 0) {
                    $advance              = Advance::findOrFail( $request->advance_id);
                    $adv_total = $advance->balance - $adv;
                    $advance->destination = $invoice->document;
                    if ($adv_total == 0) {
                        $advance->status      = 'aplicado';
                    } else {
                        $advance->status      = 'parcial';
                    }
                    $advance->balance = $adv_total;
                    $advance->update();

                    $boxy = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                    $in_advance = $boxy->in_advance + $pay;

                    $sale_box = Sale_box::findOrFail($boxy->id);
                    $sale_box->in_advance = $in_advance;
                    $sale_box->update();
                } else {
                    $pay_invoice                  = new Pay_invoice();
                    $pay_invoice->pay             = $pay;
                    $pay_invoice->balance_invoice = $invoice->balance - $pay;
                    $pay_invoice->user_id         = $invoice->user_id;
                    $pay_invoice->branch_id       = $invoice->branch_id;
                    $pay_invoice->invoice_id      = $invoice->id;
                    $pay_invoice->save();

                    $pay_invoice_Pay_method                     = new Pay_invoice_Payment_method();
                    $pay_invoice_Pay_method->pay_invoice_id     = $pay_invoice->id;
                    $pay_invoice_Pay_method->payment_method_id  = $request->payment_method_id;
                    $pay_invoice_Pay_method->bank_id            = $request->bank_id;
                    $pay_invoice_Pay_method->card_id            = $request->card_id;
                    $pay_invoice_Pay_method->advance_id         = $request->advance_id;
                    $pay_invoice_Pay_method->payment            = $request->pay;
                    $pay_invoice_Pay_method->transaction        = $request->transaction;
                    $pay_invoice_Pay_method->save();

                }

                $mp = $request->payment_method_id;

                $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                $in_invoice      = $sale_box->in_invoice + $request->pay;
                $in_invoice_cash = $sale_box->in_invoice_cash;
                $in_pay_cash     = $sale_box->in_pay_cash;
                $in_pay          = $sale_box->in_pay + $pay;
                $cash            = $sale_box->cash;
                $out             = $sale_box->out_cash;
                if($mp == 10){
                    $in_invoice_cash += $pay;
                    $in_pay_cash     += $pay;
                    $cash            += $pay;
                }
                $totale = $cash - $out;

                $sale_box->in_invoice_cash = $in_invoice_cash;
                $sale_box->in_invoice      = $in_invoice;
                $sale_box->in_pay_cash     = $in_pay_cash;
                $sale_box->in_pay          = $in_pay;
                $sale_box->cash            = $cash;
                $sale_box->total           = $totale;
                $sale_box->update();
            }

            $cont = 0;

            while($cont < count($product_id)){

                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub   = $subtotal * $iva[$cont]/100;
                $item     = $cont + 1;
                $prodid   = $product_id[$cont];

                $invoice_product = new Invoice_product();
                $invoice_product->invoice_id = $invoice->id;
                $invoice_product->product_id = $idP[$cont];
                $invoice_product->quantity   = $quantity[$cont];
                $invoice_product->price      = $price[$cont];
                $invoice_product->iva        = $iva[$cont];
                $invoice_product->subtotal   = $subtotal;
                $invoice_product->ivasubt    = $ivasub;
                $invoice_product->item       = $item;
                $invoice_product->save();

                $branch_products = Branch_product::findOrFail($prodid);
                $id = $branch_products->id;
                $prestock = $branch_products->stock;
                $stock = $prestock - $invoice_product->quantity;

                $branch_product = Branch_product::findOrFail($id);
                $branch_product->stock = $stock;
                $branch_product->update();

                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $invoice_product->product_id)
                ->first();

                $id = $products->id;
                $stockardex = $products->stock;

                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $invoice->branch_id;
                $kardex->operation = 'venta';
                $kardex->number = $invoice->document;
                $kardex->quantity = $quantity[$cont];
                $kardex->stock = $stockardex;
                $kardex->save();

                $cont++;
            }
            $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
            $sale_box->sale += $request->total_pay;
            $sale_box->update();


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
        $invoice = Invoice::where('id', $id)->first();

        /*mostrar detalles*/
        $invoice_products = Invoice_product::where('invoice_id', $id)->get();

        return view('admin.invoice.show', compact('invoice', 'invoice_products'));
    }

    public function show_invoice($id)
     {

        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('company_id', $invoices->company_id, 60 * 24 *365);
        return redirect('admin/factura/show');
     }

     public function show_ndinvoice($id)
     {
        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoices->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoices->iva, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);
        return redirect('ndinvoice/create');
     }

     public function show_ncinvoice($id)
     {
        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoices->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoices->iva, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);
        return redirect('ncinvoice/create');
     }

     public function show_pay_invoice($id)
     {

        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('due_date', $invoices->due_date, 60 * 24 *365);
        \session()->put('total', $invoices->total, 60 * 24 *365);
        \session()->put('total_iva', $invoices->total_iva, 60 * 24 *365);
        \session()->put('total_pay', $invoices->total_Pay, 60 * 24 *365);
        \session()->put('status', $invoices->status, 60 * 24 *365);

        return redirect('pay_invoice/create');
     }

    public function show_pdf_invoice(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice_products = Invoice_product::where('invoice_id', $id)->get();
        $company = Company::findOrFail(1);
        $indicators = Indicator::findOrFail(1);

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.pdf', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'indicators'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        //return $pdf->stream('vista-pdf', "$invoicepdf.pdf");
        return $pdf->download("$invoicepdf.pdf");
    }

    public function post(Request $request, $id)
    {
        $invoice = Invoice::where('id', $id)->first();
        /*
        $invoice = Invoice::from('invoices AS inv')
        ->join('branches AS bra', 'inv.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->join('documents AS doc', 'cus.document_id', '=', 'doc.id')
        ->join('regimes AS reg', 'cus.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'cus.tax_id', '=', 'tax.id')
        ->join('municipalities AS mun', 'cus.municipality_id', '=', 'mun.id')
        ->join('payment_forms AS pf', 'inv.payment_form_id', 'pf.id')
        ->join('payment_methods AS pm', 'inv.payment_method_id', 'pm.id')
        ->select('inv.id', 'inv.invoice', 'inv.created_at', 'inv.due_date',  'inv.total', 'bra.name AS nameS', 'bra.address AS addressB', 'bra.email', 'bra.phone', 'bra.mobile', 'cus.name AS nameC', 'cus.document_id', 'cus.number', 'cus.address', 'cus.email', 'doc.initial', 'inv.created_at', 'reg.name AS nameR', 'mun.name AS nameM', 'tax.description', 'pf.name AS namePF', 'pm.name AS namePM')
        ->where('inv.id', '=', $id)->first();*/

        $invoice_products = Invoice_product::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.id', 'inv.id AS idI', 'inv.created_at', 'inv.total', 'ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
        ->where('ip.invoice_id', '=', $id)
        ->get();

        $invoicy = Invoice_product::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.id', 'inv.id AS idI', 'inv.created_at', 'inv.total', 'inv.total_iva', 'inv.total_pay', 'ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
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
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.post', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'invoicy', 'indicators'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,497.64), 'portrait');

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

    public function getAdvances(Request $request, $id)
    {
        if($request)
        {
            $advances = Advance::where('customer_id', '=', $id)->get();

            return response()->json($advances);
        }
    }
}
