<?php

namespace App\Http\Controllers;

use App\Models\Ncinvoice;
use App\Http\Requests\StoreNcinvoiceRequest;
use App\Http\Requests\UpdateNcinvoiceRequest;
use App\Models\Advance;
use App\Models\Branch_product;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Kardex;
use App\Models\Nc_discrepancy;
use App\Models\Ncinvoice_product;
use App\Models\Pay_event;
use App\Models\Pay_invoice;
use App\Models\Product;
use App\Models\Sale_box;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class NcinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        if (request()->ajax()) {
            if ($user->role_id == 1 || $user->role_id == 2) {
                $ncinvoices = Ncinvoice::get();
            } else {
                $ncinvoices = Ncinvoice::where('branch_id', $user->branch_id)->where('user_id', $user->id)->get();
            }
            return DataTables::of($ncinvoices)
            ->addIndexColumn()

            ->addColumn('invoice', function (Ncinvoice $ncinvoice) {
                return $ncinvoice->invoice->document;
            })
            ->addColumn('branch', function (Ncinvoice $ncinvoice) {
                return $ncinvoice->branch->name;
            })
            ->addColumn('customer', function (Ncinvoice $ncinvoice) {
                return $ncinvoice->customer->name;
            })

            ->editColumn('created_at', function(Ncinvoice $ncinvoice){
                return $ncinvoice->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/ncinvoice/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.ncinvoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $invoices = Invoice::from('invoices AS inv')
        ->join('customers AS cus', 'inv.customer_id', '=', 'cus.id')
        ->select('inv.id', 'cus.id as idC', 'cus.name', 'inv.invoice', 'inv.pay', 'inv.balance', 'inv.total', 'inv.total_iva', 'inv.total_pay', 'inv.status')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->first();

        if ($invoices->status != 'ACTIVE') {
            return redirect("invoice")->with('warning', 'Esta Compra ya tiene una Nota Credito O Debito');
        }

        $invoice_products = Invoice_product::from('invoice_products AS ip')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'inv.id as idI', 'pro.id as idP', 'ip.quantity', 'ip.price', 'ip.subtotal', 'pro.name', 'pro.stock', 'cat.iva')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->get();

        $products = Product::from('products AS pro')
        ->join('invoice_products AS ip', 'ip.product_id', '=', 'pro.id')
        ->select('pro.id', 'pro.name', 'ip.price')->get();

        $discrepancies = Nc_discrepancy::get();

        return view('admin.ncinvoice.create', compact('invoices', 'products', 'invoice_products', 'discrepancies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNcinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNcinvoiceRequest $request)
    {
        try{
            DB::beginTransaction();

            $inv = $request->invoice_id;
            $invoice = Invoice::findOrFail($inv);
            $branch = $invoice->branch_id;
            $pay = $invoice->pay;

            $date1 = Carbon::now()->toDateString();
            $date2 = Invoice::find($invoice->id)->created_at->toDateString();
            if ($date1 == $date2) {
                $sale_box = Sale_box::where('user_id', '=', $invoice->user_id)->where('status', '=', 'open')->first();
                $sale_box->invoice -= $invoice->total_pay;
                $sale_box->update();
            }

            if ($pay > 0) {

                $advance = new Advance();
                $advance->user_id    = Auth::user()->id;
                $advance->branch_id  = $branch;
                $advance->customer_id = $invoice->customer_id;
                $advance->origin = 'Anticipo devolucion de venta';
                $advance->destination = null;
                $advance->pay        = $pay;
                $advance->balance = $pay;
                $advance->note = 'por eliminacion de factura de venta';
                $advance->save();
            }
            $payInvoice = Pay_invoice::where('invoice_id', $invoice->id)->get();
            foreach ($payInvoice as $key => $value) {
                $value->status = 'advance';
            }
            //Registrar tabla Nota Credito
            $ncinvoice = new Ncinvoice();
            $ncinvoice->user_id = Auth::user()->id;
            $ncinvoice->branch_id = $branch;
            $ncinvoice->invoice_id = $invoice->id;
            $ncinvoice->customer_id = $invoice->customer_id;
            $ncinvoice->nc_discrepancy_id = 2;
            $ncinvoice->voucher_type_id = 5;
            $ncinvoice->total = $invoice->total;
            $ncinvoice->total_iva = $invoice->total_iva;
            $ncinvoice->total_pay = $invoice->total_pay;
            $ncinvoice->save();

            //Seleccionar los productos de la compra
            $invoiceProducts = Invoice_product::where('invoice_id', $invoice->id)->get();
            foreach ($invoiceProducts as $ip) {
                $id = $ip->product_id;
                $quantity = $ip->quantity;
                $price = $ip->price;
                $branch_product = Branch_product::where('branch_id', $branch)->where('product_id', $id)->first();
                $branch_product->stock += $quantity;
                $branch_product->update();

                $ncinvoiceProducts = new Ncinvoice_product();
                $ncinvoiceProducts->ncinvoice_id = $ncinvoice->id;
                $ncinvoiceProducts->product_id = $id;
                $ncinvoiceProducts->quantity = $quantity;
                $ncinvoiceProducts->price = $ip->price;
                $ncinvoiceProducts->save();

                $product = Product::findOrFail($id);
                //actualizando la tabla products
                $product->stock += $quantity;
                $product->update();

                //Actualizar Kardex
                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $branch;
                $kardex->operation = 'nc_venta';
                $kardex->number = $ncinvoice->id;
                $kardex->quantity = $quantity;
                $kardex->stock = $product->stock;
                $kardex->save();
            }

            //actualizando campo status de la factura
            $invoice->total = 0;
            $invoice->total_iva = 0;
            $invoice->total_pay = 0;
            $invoice->pay = 0;
            $invoice->balance = 0;
            $invoice->status = 'credit_note';
            $invoice->note = 'Factura eliminada con nota Credito #' . '-' . $ncinvoice->id;
            $invoice->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        if ($pay > 0) {
            Alert::success('Venta','Eliminada Satisfactoriamente. Con creacion de anticipo de Cliente');
            return redirect('ncinvoice');

        } else {
            return redirect("ncinvoice")->with('success', 'Venta Eliminada Satisfactoriamente');
        }






        $invoice = $request->session()->get('invoice');
        $inv = Invoice::findOrFail($invoice);
        $branch = $request->session()->get('branch');
        $discrepancy = $request->nc_discrepancy_id;
        $total = $inv->total;
        $totaly = $request->total;
        $totality = $total - $totaly;
        if ($discrepancy != 2 && $totality < 0) {
            return redirect("invoice")->with('warning', 'El valor de NC supera el valor de la factura');
        }
        try{
            DB::beginTransaction();
            //Registrar tabla Nota Credito

            $ncinvoice = new Ncinvoice();
            $ncinvoice->user_id           = Auth::user()->id;
            $ncinvoice->branch_id         = $branch;
            $ncinvoice->invoice_id        = $invoice;
            $ncinvoice->customer_id       = $request->customer_id;
            $ncinvoice->nc_discrepancy_id = $request->nc_discrepancy_id;
            if ($discrepancy == 2) {
                $ncinvoice->total             = $inv->total;
                $ncinvoice->total_iva         = $inv->total_iva;
                $ncinvoice->total_pay         = $inv->total_pay;
            } else {
                $ncinvoice->total             = $request->total;
                $ncinvoice->total_iva         = $request->total_iva;
                $ncinvoice->total_pay         = $request->total_pay;
            }
            $ncinvoice->payment_method_id = $request->payment_method_id;
            $ncinvoice->payment_form_id   = $request->payment_form_id;
            $ncinvoice->voucher_type_id   = 5;
            $ncinvoice->pay               = $request->total_pay;
            $ncinvoice->balance           = 0;
            $ncinvoice->save();

            //metodo para crear un pay evento


            $pay_event = new Pay_event();
            $pay_event->origin = $inv->invoice;
            $pay_event->destination = null;
            $pay_event->document = 'FACTURA';
            $pay_event->pay = $ncinvoice->total_pay;
            $pay_event->status = 'PENDIENTE';
            $pay_event->save();

            //Seleccionar los productos de la venta
            $invoice_products = Invoice_product::where('invoice_id', $invoice)->get();
            if ($discrepancy == 2) {
                foreach ($invoice_products as $ip) {
                    $id = $ip->product_id;
                    $quantity = $ip->quantity;
                    $branch_product = Branch_product::where('branch_id', $branch)->where('product_id', $id)->first();
                    $stk = $branch_product->stock;
                    $stky = $stk + $quantity;
                    $branch_product->stock = $stky;
                    $branch_product->update();

                    $ncinvoice_product = new Ncinvoice_product();
                    $ncinvoice_product->ncinvoice_id = $ncinvoice->id;
                    $ncinvoice_product->product_id = $ip->product_id;
                    $ncinvoice_product->quantity = $ip->quantity;
                    $ncinvoice_product->price = $ip->price;
                    $ncinvoice_product->save();

                }
            } else {
                $product_id     = $request->product_id;
                $quantity       = $request->quantity;
                $price          = $request->price;
                $stock          = $request->stock;

                $cont = 0;
                while($cont < count($product_id)){
                    if ($discrepancy == 1) {
                        $ncinvoice_product = new Ncinvoice_product();
                        $ncinvoice_product->ncinvoice_id = $ncinvoice->id;
                        $ncinvoice_product->product_id = $product_id[$cont];
                        $ncinvoice_product->quantity = $quantity[$cont];
                        $ncinvoice_product->price = $price[$cont];
                        $ncinvoice_product->save();
                        //Calcular el valor para actualizar Branch_products
                        $branch_products = Branch_product::where('branch_id', $ncinvoice-> branch_id)->where('product_id', $product_id[$cont])->first();
                        $id = $branch_products->product_id;
                        $prestock = $branch_products->stock;
                        $stock = $prestock + $ncinvoice_product->quantity;
                        //Actualizar tabla Branch Products
                        $branch_products->stock = $stock;
                        $branch_products->update();

                        //reemplazando trigger
                        $product = Product::findOrFail($product_id[$cont]);
                        $product->stock += $quantity[$cont];
                        $product->update();

                        //calcular valor para actualizar kardex
                        $products = Product::where('id', $product_id[$cont])->first();

                        $id = $products->id;
                        $stockardex = $products->stock;
                        //Actualizar Kardex
                        $kardex = new Kardex();
                        $kardex->product_id = $product->id;
                        $kardex->branch_id = $ncinvoice->branch_id;
                        $kardex->operation = 'nc_venta';
                        $kardex->number = $ncinvoice->id;
                        $kardex->quantity = $product_id[$cont];
                        $kardex->stock = $product->stock;
                        $kardex->save();

                    }else {
                        //Registrar la nota credito
                        $ncinvoice_product = new Ncinvoice_product();
                        $ncinvoice_product->ncinvoice_id = $ncinvoice->id;
                        $ncinvoice_product->product_id   = $product_id[$cont];
                        $ncinvoice_product->quantity     = $quantity[$cont];
                        $ncinvoice_product->price        = $price[$cont];
                        $ncinvoice_product->save();
                    }

                    $cont++;
                }
            }
            //metodo para crear un pay evento
            $pay_event = new Pay_event();
            $pay_event->origin = $inv->invoice;
            $pay_event->destination = null;
            $pay_event->document = 'FACTURA';
            $pay_event->pay = $ncinvoice->total_pay;
            $pay_event->status = 'PENDIENTE';
            $pay_event->save();



            //metodo para uso de abono a otra factura
            if($inv->balance > 0){
                $pay_event = Pay_event::findOrFail($pay_event->id);
                $pay_event->origin = $inv->invoice;
                $pay_event->destination = null;
                $pay_event->document = 'FACTURA';
                $pay_event->pay = $request->total_pay;
                $pay_event->status = 'PENDIENTE';
                $pay_event->save();
            }
            //actualizando campo status de la factura
            $invoice = Invoice::findOrFail($invoice);
            $invoice->status = 'CREDIT_NOTE';
            $invoice->update();

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
     * @param  \App\Models\Ncinvoice  $ncinvoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ncinvoices = Ncinvoice::from('ncinvoices AS nc')
        ->join('users as use', 'nc.user_id', 'use.id')
        ->join('branches AS bra', 'nc.branch_id', '=', 'bra.id')
        ->join('customers AS cus', 'nc.customer_id', '=', 'cus.id')
        ->join('invoices as inv', 'nc.invoice_id', '=', 'inv.id')
        ->select('nc.id', 'inv.total', 'inv.total_iva', 'inv.total_pay', 'inv.created_at', 'bra.name as nameB', 'cus.name as nameC', 'inv.invoice as nf', 'use.name')
        ->where('nc.id', '=', $id)->first();

        /*mostrar detalles*/
        $ncinvoice_products = Ncinvoice_product::from('ncinvoice_products AS np')
        ->join('products AS pro', 'np.product_id', '=', 'pro.id')
        ->join('ncinvoices AS nci', 'np.ncinvoice_id', '=', 'nci.id')
        ->select('np.quantity', 'np.price', 'nci.total', 'nci.total_iva', 'nci.total_pay', 'pro.name')
        ->where('np.ncinvoice_id', '=', $id)
        ->get();

        return view('admin.ncinvoice.show', compact('ncinvoices', 'ncinvoice_products'));
    }

    public function show_pay_ncinvoice($id)
    {
        $ncinvoice = Ncinvoice::findOrFail($id);
        if ($ncinvoice->balance == 0) {
            return redirect("ncinvoice")->with('warning', 'Esta Nota Debito ya esta vancelada');
        } else {
            # code...
        }

        \Session::put('ncinvoice', $ncinvoice->id, 60 * 24 * 365);

        return redirect('cash_out');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ncinvoice  $ncinvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Ncinvoice $ncinvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNcinvoiceRequest  $request
     * @param  \App\Models\Ncinvoice  $ncinvoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNcinvoiceRequest $request, Ncinvoice $ncinvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ncinvoice  $ncinvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ncinvoice $ncinvoice)
    {
        //
    }
}
