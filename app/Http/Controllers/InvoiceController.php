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
use App\Models\Pay_invoice;
use App\Models\Pay_invoice_payment_method;
use App\Models\Payment_form;
use App\Models\Payment_method;
use App\Models\Percentage;
use App\Models\Product;
use App\Models\Regime;
use App\Models\Sale_box;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
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
        $invoice = session('invoice');
        $branch = Branch::where('id', '=', $request->session()->get('branch'))->first();

        $user = Auth::user();
        if (request()->ajax()) {
            if ($user->role_id == 1 || $user->role_id == 2) {
                $invoices = Invoice::get();
            } else {
                $invoices = Invoice::where('branch_id', $user->branch_id)->where('user_id', $user->id)->get();
            }
            return DataTables::of($invoices)
            ->addIndexColumn()
            ->addColumn('customer', function (Invoice $invoice) {
                return $invoice->customer->name;
            })
            ->addColumn('branch', function (Invoice $invoice) {
                return $invoice->branch->name;
            })
            ->addColumn('status', function (Invoice $invoice) {
                if ($invoice->status == 'active') {
                    return $invoice->status == 'active' ? 'Activa' : 'Venta';
                } elseif ($invoice->status == 'credit_note') {
                    return $invoice->status == 'credit_note' ? 'Nota Credito' : 'Anulada';
                } else {
                    return $invoice->status == 'debit_note' ? 'Nota Debito' : 'Editada';
                }
            })
            ->editColumn('created_at', function(Invoice $invoice){
                return $invoice->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/invoice/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.invoice.index', compact('invoice'));
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
        $payment_forms = Payment_form::get();
        $payment_methods = Payment_method::get();
        $percentages = Percentage::get();
        $banks = Bank::get();
        $cards = Card::get();
        $advances   = Advance::where('status', '!=', 'aplicado')->get();

        $branch_products = Branch_product::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', Auth::user()->branch_id)
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'activo')
        ->get();
        return view('admin.invoice.create', compact(
            'departments',
            'municipalities',
            'documents',
            'customers',
            'liabilities',
            'organizations',
            'regimes',
            'payment_forms',
            'payment_methods',
            'percentages',
            'banks',
            'cards',
            'advances',
            'branch_products'
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
        $advance = $request->advance;

        $invoice                    = new Invoice();
        $invoice->user_id           = Auth::user()->id;
        $invoice->branch_id         = Auth::user()->branch_id;
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

        $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
        $sale_box->invoice += $invoice->total_pay;
        $sale_box->in_total += $invoice->pay;
        $sale_box->update();
        if($pay > 0){
            $adv = $request->advance;

            if ($adv != 0) {
                //llamado al pago anticipado
                $advance = Advance::findOrFail( $request->advance_id);
                //si el Anticipo es utilizado en su totalidad agregar el destino aplicado
                if ($advance->pay > $advance->balance) {
                    $advance->destination = $advance->destination . '<->' . $invoice->document;
                } else {
                    $advance->destination = $invoice->document;
                }
                //variable si hay saldo en el Anticipado
                $adv_total = $advance->balance - $adv;
                //cambiar el status del Anticipado
                if ($adv_total == 0) {
                    $advance->status = 'aplicado';
                } else {
                    $advance->status = 'parcial';
                }
                $advance->balance = $adv_total;
                $advance->update();
                /*
                $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                $sale_box->in_advance += $pay;
                $sale_box->update();*/
            } else {
                $pay_invoice                  = new Pay_invoice();
                $pay_invoice->pay             = $pay;
                $pay_invoice->balance_invoice = $invoice->balance - $pay;
                $pay_invoice->user_id         = $invoice->user_id;
                $pay_invoice->branch_id       = $invoice->branch_id;
                $pay_invoice->invoice_id      = $invoice->id;
                $pay_invoice->save();

                $pay_invoice_Payment_method  = new Pay_invoice_payment_method();
                $pay_invoice_Payment_method->pay_invoice_id     = $pay_invoice->id;
                $pay_invoice_Payment_method->payment_method_id  = $request->payment_method_id;
                $pay_invoice_Payment_method->bank_id            = $request->bank_id;
                $pay_invoice_Payment_method->card_id            = $request->card_id;
                $pay_invoice_Payment_method->advance_id         = $request->advance_id;
                $pay_invoice_Payment_method->payment            = $request->pay;
                $pay_invoice_Payment_method->transaction        = $request->transaction;
                $pay_invoice_Payment_method->save();

                $mp = $request->payment_method_id;
                //metodo para actualizar la caja
                $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                if($mp == 10){
                    $sale_box->in_invoice_cash += $pay;
                    $sale_box->cash += $pay;
                }
                $sale_box->in_invoice += $pay;
                $sale_box->update();
            }
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

            //reeplazando trigger
            $product = Product::findOrFail($invoice_product->product_id);
            $product->stock -= $quantity[$cont];
            $product->update();

            $kardex = new Kardex();
            $kardex->product_id = $product->id;
            $kardex->branch_id = $invoice->branch_id;
            $kardex->operation = 'venta';
            $kardex->number = $invoice->document;
            $kardex->quantity = $quantity[$cont];
            $kardex->stock = $product->stock;
            $kardex->save();

            $cont++;
        }

        session(['invoice' => $invoice->id]);

        toast('Venta Registrada satisfactoriamente.','success');
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
        $invoice_products = Invoice_product::where('invoice_id', $id)->where('quantity', '>', 0)->get();

        return view('admin.invoice.show', compact('invoice', 'invoice_products'));
    }

     public function edit(Invoice $invoice)
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $customers = Customer::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $regimes = Regime::get();
        $payment_forms = Payment_form::get();
        $payment_methods = Payment_method::get();
        $percentages = Percentage::get();
        $banks = Bank::get();
        $cards = Card::get();
        $advances   = Advance::where('status', '!=', 'aplicado')->get();

        $branch_products = Branch_product::from('branch_products as bp')
        ->join('products as pro', 'bp.product_id', 'pro.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('bp.id', 'bp.branch_id', 'bp.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva')
        ->where('bp.branch_id', $invoice->branch->id)
        ->where('bp.stock', '>', 0)
        ->where('pro.status', '=', 'activo')
        ->get();
        $invoiceProducts = Invoice_product::from('invoice_products as ip')
        ->join('products as pro', 'ip.product_id', 'pro.id')
        ->join('invoices as inv', 'ip.invoice_id', 'inv.id')
        ->join('categories as cat', 'pro.category_id', 'cat.id')
        ->select('ip.id', 'ip.quantity', 'ip.price', 'pro.stock', 'pro.id as idP', 'pro.sale_price', 'pro.name', 'cat.iva', 'inv.balance')
        ->where('invoice_id', $invoice->id)
        ->get();

        $payInvoices = Pay_invoice::where('invoice_id', $invoice->id)->sum('pay');

        return view('admin.invoice.edit', compact(
            'invoice',
            'departments',
            'municipalities',
            'documents',
            'customers',
            'liabilities',
            'organizations',
            'regimes',
            'payment_forms',
            'payment_methods',
            'percentages',
            'banks',
            'cards',
            'advances',
            'branch_products',
            'invoiceProducts',
            'payInvoices'
        ));
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
        //llamado a variables
        $product_id = $request->product_id;
        $quantity   = $request->quantity;
        $price      = $request->price;
        $iva        = $request->iva;
        $pay        = $request->pay;
        $total_pay = $request->total_pay;

        //llamado de todos los pagos y pago nuevo para la diferencia
        $payOld = Pay_invoice::where('invoice_id', $invoice->id)->sum('pay');
        $payNew = $pay;
        $payTotal = $payNew + $payOld;
        $date1 = Carbon::now()->toDateString();
        $date2 = Invoice::find($invoice->id)->created_at->toDateString();

        if ($payOld > $total_pay) {

            $advance = new Advance();
            $advance->user_id    = Auth::user()->id;
            $advance->branch_id  = Auth::user()->branch_id;
            $advance->customer_id = $request->customer_id;
            $advance->origin = 'Factura de venta' . '-' . $invoice->document;
            $advance->destination = null;
            $advance->pay = $payOld - $total_pay;
            $advance->balance = $payOld - $total_pay;
            $advance->note = 'diferencia de edicion de factura';
            $advance->save();
        }
        //actualizar la caja
        if ($date1 == $date2) {
            $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
            $sale_box->invoice -= $invoice->total_pay;
            $sale_box->update();
        }

        //Actualizando un registro de ventas
        $invoice->user_id           = Auth::user()->id;
        $invoice->branch_id         = Auth::user()->branch_id;
        $invoice->customer_id       = $request->customer_id;
        $invoice->payment_form_id   = $request->payment_form_id;
        $invoice->payment_method_id = $request->payment_method_id;
        $invoice->percentage_id     = $request->percentage_id;
        $invoice->voucher_type_id   = 1;
        $invoice->document          = $invoice->document;
        $invoice->type_document     = '01';
        $invoice->type_operation    = '10';
        $invoice->due_date          = $request->due_date;
        $invoice->items             = count($product_id);
        $invoice->total             = $request->total;
        $invoice->total_iva         = $request->total_iva;
        $invoice->total_pay         = $total_pay;
        if ($payOld > 0 && $pay == 0) {
            $invoice->pay = $payOld;
        } elseif ($payOld > 0 && $pay > 0) {
            $invoice->pay = $pay + $payOld;
        } elseif ($payOld == 0 && $pay > 0) {
            $invoice->pay = $pay;
        } else {
            $invoice->pay = $pay;
        }
        if ($payOld > $total_pay) {
            $invoice->balance = 0;
        } else {
            $invoice->balance = $total_pay - $payTotal;
        }
        $invoice->retention = $request->retention;
        $invoice->update();

        //actualizar la caja
        if ($date1 == $date2) {
            $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
            $sale_box->invoice += $invoice->total_pay;
            $sale_box->in_total += $pay;
            $sale_box->update();
        }

        //inicio proceso si hay pagos
        if($pay > 0){
            //variable si el pago se hace de un Anticipo
            $adv = $request->advance;

            //inicio proceso si hay pago po abono anticipado
            if ($adv != 0) {
                //llamado al pago anticipado
                $advance = Advance::findOrFail( $request->advance_id);
                //si el Anticipo es utilizado en su totalidad agregar el destino aplicado
                if ($advance->pay > $advance->balance) {
                    $advance->destination = $advance->destination . '<->' . $invoice->document;
                } else {
                    $advance->destination = $invoice->document;
                }
                //variable si hay saldo en el Anticipado
                $adv_total = $advance->balance - $adv;
                //cambiar el status del Anticipado
                if ($adv_total == 0) {
                    $advance->status = 'aplicado';
                } else {
                    $advance->status = 'parcial';
                }
                $advance->balance = $adv_total;
                $advance->update();
            } else {
                //si no hay pago anticipado se crea un pago a compra
                $pay_invoice = new Pay_invoice();
                $pay_invoice->pay = $pay;
                $pay_invoice->balance_invoice = $invoice->balance - $pay;
                $pay_invoice->user_id = $invoice->user_id;
                $pay_invoice->branch_id = $invoice->branch_id;
                $pay_invoice->invoice_id = $invoice->id;
                $pay_invoice->save();

                //metodo que registra el pago a compra y el methodo de pago
                $pay_invoice_Payment_method = new Pay_invoice_payment_method();
                $pay_invoice_Payment_method->pay_invoice_id = $pay_invoice->id;
                $pay_invoice_Payment_method->payment_method_id = $request->payment_method_id;
                $pay_invoice_Payment_method->bank_id = $request->bank_id;
                $pay_invoice_Payment_method->card_id = $request->card_id;
                $pay_invoice_Payment_method->advance_id = $request->advance_id;
                $pay_invoice_Payment_method->payment = $pay;
                $pay_invoice_Payment_method->transaction = $request->transaction;
                $pay_invoice_Payment_method->save();

                $mp = $request->payment_method_id;
                //metodo para actualizar la caja
                $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                if($mp == 10){
                    $sale_box->in_invoice_cash += $pay;
                    $sale_box->cash += $pay;
                }
                $sale_box->in_invoice += $pay;
                $sale_box->update();
            }
        }

        $invoiceProducts = Invoice_product::where('invoice_id', $invoice->id)->get();
        foreach ($invoiceProducts as $key => $invoiceProduct) {
            //selecciona el producto que viene del array
            $products = Product::where('id', $invoiceProduct->product_id)->first();
            $products->stock += $invoiceProduct->quantity;
            $products->update();

            //selecciona el producto de la sucursal que sea el mismo del array
            $branch_products = Branch_product::where('product_id', '=', $invoiceProduct->product_id)
            ->where('branch_id', '=', $invoice->branch_id)
            ->first();
            $branch_products->stock += $invoiceProduct->quantity;
            $branch_products->update();

            //Actualiza la tabla del Kardex
            $kardex = Kardex::where('operation', 'venta')->where('number', $invoice->document)->first();
            $kardex->quantity -= $invoiceProduct->quantity;
            $kardex->stock += $invoiceProduct->quantity;
            $kardex->update();

            $invoiceProduct->quantity    = 0;
            $invoiceProduct->price       = 0;
            $invoiceProduct->iva         = 0;
            $invoiceProduct->subtotal    = 0;
            $invoiceProduct->ivasubt     = 0;
            $invoiceProduct->item        = 0;
            $invoiceProduct->update();
        }

        $cont = 0;
        $item = 1;

        while($cont < count($product_id)){
            $invoiceProduct = Invoice_product::where('invoice_id', $invoice->id)->where('product_id', $product_id[$cont])->first();
            $subtotal = $quantity[$cont] * $price[$cont];
            $ivasub   = $subtotal * $iva[$cont]/100;
            if (is_null($invoiceProduct)) {

                $invoice_product = new Invoice_product();
                $invoice_product->invoice_id = $invoice->id;
                $invoice_product->product_id = $product_id[$cont];
                $invoice_product->quantity = $quantity[$cont];
                $invoice_product->price = $price[$cont];
                $invoice_product->iva = $iva[$cont];
                $invoice_product->subtotal = $subtotal;
                $invoice_product->ivasubt = $ivasub;
                $invoice_product->item = $item;
                $invoice_product->save();

                $item ++;

                $branch_products = Branch_product::where('product_id', '=', $product_id[$cont])
                ->where('branch_id', '=', $invoice->branch_id)
                ->first();
                $branch_products->stock -= $quantity[$cont];
                $branch_products->update();

                $products = Product::findOrFail($product_id[$cont]);
                $products->stock -= $quantity[$cont];
                $products->update();

                $kardex = new Kardex();
                $kardex->product_id = $products->id;;
                $kardex->branch_id = $invoice->branch_id;
                $kardex->operation = 'venta';
                $kardex->number = $invoice->document;
                $kardex->quantity = $quantity[$cont];
                $kardex->stock = $products->stock;
                $kardex->save();
            } else {
                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub   = $subtotal * $iva[$cont]/100;
                $item     = $cont + 1;
                $invoiceProduct->quantity = $quantity[$cont];
                $invoiceProduct->price = $price[$cont];
                $invoiceProduct->iva = $iva[$cont];
                $invoiceProduct->subtotal = $subtotal;
                $invoiceProduct->ivasubt = $ivasub;
                $invoiceProduct->item = $item;
                $invoiceProduct->update();
                $item ++;
                /*
                if ($quantity[$cont] > 0) {
                    if ($invoiceProduct->quantity > 0) {
                        $invoiceProduct->quantity += $quantity[$cont];
                        $invoiceProduct->price += $price[$cont];
                        $invoiceProduct->iva += $iva[$cont];
                        $invoiceProduct->subtotal += $subtotal;
                        $invoiceProduct->ivasubt += $ivasub;
                        $invoiceProduct->update();
                    } else {

                        $invoiceProduct->quantity = $quantity[$cont];
                        $invoiceProduct->price = $price[$cont];
                        $invoiceProduct->iva = $iva[$cont];
                        $invoiceProduct->subtotal = $subtotal;
                        $invoiceProduct->ivasubt = $ivasub;
                        $invoiceProduct->item = $item;
                        $invoiceProduct->update();
                        $item ++;
                    }
                }*/
                $branch_products = Branch_product::where('product_id', '=', $product_id[$cont])
                ->where('branch_id', '=', $invoice->branch_id)
                ->first();
                $branch_products->stock -= $quantity[$cont];
                $branch_products->update();

                $products = Product::findOrFail($product_id[$cont]);
                $products->stock -= $quantity[$cont];
                $products->update();

                $kardex = Kardex::where('operation', 'venta')->where('number', $invoice->document)->first();
                $kardex->quantity = $quantity[$cont];
                $kardex->stock -= $quantity[$cont];
                $kardex->update();
            }
            $cont++;
        }
        session(['invoice' => $invoice->id]);

        if ($payOld > $total_pay) {
            Alert::success('Venta','Editada Satisfactoriamente. Con creacion de anticipo de cliente');
            return redirect('invoice');

        } else {
            return redirect("invoice")->with('success', 'Venta Editada Satisfactoriamente');
        }
    }

    public function show_ndinvoice($id)
     {
        $invoice = Invoice::findOrFail($id);
        \session()->put('invoice', $invoice->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoice->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoice->iva, 60 * 24 *365);
        \session()->put('total', $invoice->total, 60 * 24 *365);
        \session()->put('status', $invoice->status, 60 * 24 *365);


        if ($invoice->status == 'credit_note') {
            return redirect("invoice")->with('warning', 'Esta Venta ya tiene una Nota Credito');
        }
        //$productPurchases = Product_purchase::where('purchase_id', $purchase->id)->get();

        $invoiceProducts = Invoice_product::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
        ->where('ip.invoice_id', '=', $invoice->id)->get();
        $products = Product::get();
        return view('admin.ncinvoice.create', compact(
            'invoice',
            'invoiceProducts',
            'products',
        ));
    }

    public function show_invoice($id)
     {
        $invoices = Invoice::findOrFail($id);
        \session()->put('invoice', $invoices->id, 60 * 24 * 365);
        \session()->put('company_id', $invoices->company_id, 60 * 24 *365);
        return redirect('admin/invoice/show');
     }

     public function show_ncinvoice($id)
     {
        $invoice = Invoice::findOrFail($id);
        \session()->put('invoice', $invoice->id, 60 * 24 * 365);
        \session()->put('customer_id', $invoice->customer_id, 60 * 24 *365);
        \session()->put('iva', $invoice->iva, 60 * 24 *365);
        \session()->put('total', $invoice->total, 60 * 24 *365);
        \session()->put('status', $invoice->status, 60 * 24 *365);


        if ($invoice->status == 'credit_note') {
            return redirect("invoice")->with('warning', 'Esta Venta ya tiene una Nota Credito');
        }
        //$productPurchases = Product_purchase::where('purchase_id', $purchase->id)->get();

        $invoiceProducts = Invoice_product::from('invoice_products AS ip')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('ip.quantity', 'ip.price', 'pro.name', 'cat.iva')
        ->where('ip.invoice_id', '=', $invoice->id)->get();
        //$products = Product::get();
        return view('admin.ncinvoice.create', compact(
            'invoice',
            'invoiceProducts',
            //'products',
        ));
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

    public function invoicePdf(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice_products = Invoice_product::where('invoice_id', $id)->where('quantity', '>', 0)->get();
        $company = Company::findOrFail(1);
        $indicators = Indicator::findOrFail(1);

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.pdf', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'indicators'));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('vista-pdf', "$invoicepdf.pdf", ['Attachment' => false]);
        //return $pdf->download("$invoicepdf.pdf");
    }

    public function pdfInvoice(Request $request)
    {
        $invoices = session('invoice');
        $invoice = Invoice::findOrFail($invoices);
        session()->forget('invoice');
        $invoice_products = Invoice_product::where('invoice_id', $invoice->id)->where('quantity', '>', 0)->get();
        $company = Company::findOrFail(1);
        $indicators = Indicator::findOrFail(1);

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.pdf', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'indicators'));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('vista-pdf', "$invoicepdf.pdf", ['Attachment' => false]);
        //return $pdf->download("$invoicepdf.pdf");
    }

    public function invoicePost(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice_products = Invoice_product::where('invoice_id', $id)->where('quantity', '>', 0)->get();
        $company = Company::where('id', 1)->first();
        $indicators = Indicator::where('id', 1)->first();

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.post', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'indicators'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,846.64), 'portrait');

        return $pdf->stream('vista-pdf', "$invoicepdf.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    public function postInvoice(Request $request)
    {
        $invoices = session('invoice');
        $invoice = Invoice::findOrFail($invoices);
        session()->forget('invoice');
        $invoice_products = Invoice_product::where('invoice_id', $invoice->id)->where('quantity', '>', 0)->get();
        $company = Company::where('id', 1)->first();
        $indicators = Indicator::where('id', 1)->first();

        $days = $invoice->created_at->diffInDays($invoice->fecven);
        $invoicepdf = "FACT-". $invoice->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.invoice.post', compact('invoice', 'days', 'invoice_products', 'company', 'logo', 'indicators'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,846.64), 'portrait');

        return $pdf->stream('vista-pdf', "$invoicepdf.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */


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
