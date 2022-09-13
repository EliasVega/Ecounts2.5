<?php

namespace App\Http\Controllers;

use App\Models\Ncinvoice;
use App\Http\Requests\StoreNcinvoiceRequest;
use App\Http\Requests\UpdateNcinvoiceRequest;
use App\Models\BranchProduct;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Kardex;
use App\Models\NcinvoiceProduct;
use App\Models\Payevent;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NcinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            //$ntccompras = Ntccompra::get();

            $ncinvoices = Ncinvoice::from('ncinvoices AS nci')
            ->join('invoices AS inv', 'nci.invoice_id', '=', 'inv.id')
            ->join('customers AS cus', 'nci.customer_id', '=', 'cus.id')
            ->select('nci.id', 'inv.id AS idI', 'cus.name', 'nci.total', 'nci.created_at')
            //->where('nci.branch_id', '=', $request->session()->get('branch'))
            ->get();

            return datatables()
            ->of($ncinvoices)
            ->editColumn('created_at', function(Ncinvoice $ncinvoice){
                return $ncinvoice->created_at->format('yy-m-d');
            })
            ->addColumn('edit', 'admin/ncinvoice/actions')
            ->rawcolumns(['edit'])
            ->toJson();
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
        ->select('inv.id', 'cus.id as idC', 'cus.name', 'inv.invoice', 'inv.total', 'inv.totalIva', 'inv.totalPay', 'inv.status')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->first();

        if ($invoices->status != 'ACTIVE') {
            return redirect("invoice")->with('warning', 'Esta Compra ya tiene una Nota Credito O Debito');
        }

        $invoiceProducts = InvoiceProduct::from('invoice_products AS ip')
        ->join('invoices AS inv', 'ip.invoice_id', '=', 'inv.id')
        ->join('products AS pro', 'ip.product_id', '=', 'pro.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pro.id', 'inv.id as idI', 'pro.id as idP', 'ip.quantity', 'ip.price', 'pro.name', 'pro.stock', 'cat.iva')
        ->where('inv.id', '=', $request->session()->get('invoice'))
        ->get();

        $products = Product::from('products AS pro')
        ->join('invoice_products AS ip', 'ip.product_id', '=', 'pro.id')
        ->select('pro.id', 'pro.name', 'ip.price')->get();

        return view('admin.ncinvoice.create', compact('invoices', 'products', 'invoiceProducts'));
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
            //Seleccionar la factura para hacer Nota Credito
            $invoice = Invoice::where('id', '=', $request->session()->get('invoice'))->first();
            //Registrar tabla Nota Credito
            $ncinvoice              = new Ncinvoice();
            $ncinvoice->user_id     = Auth::user()->id;
            $ncinvoice->branch_id   = $invoice->branch_id;
            $ncinvoice->invoice_id  = $invoice->id;
            $ncinvoice->customer_id = $invoice->customer_id;
            $ncinvoice->invoice     = $invoice->invoice;
            $ncinvoice->total       = $invoice->total;
            $ncinvoice->totalIva    = $invoice->totalIva;
            $ncinvoice->totalPay    = $invoice->totalPay;
            $ncinvoice->save();
            //Seleccionar los productos de la venta
            $invoiceProduct = InvoiceProduct::where('invoice_id', '=', $invoice->id)->get();

            foreach($invoiceProduct as $ip){
                //Registrar la nota credito
                $ncinvoiceProduct = new NcinvoiceProduct();
                $ncinvoiceProduct->ncinvoice_id = $ncinvoice->id;
                $ncinvoiceProduct->product_id = $ip->product_id;
                $ncinvoiceProduct->quantity = $ip->quantity;
                $ncinvoiceProduct->price = $ip->price;
                $ncinvoiceProduct->save();
                //Calcular el valor para actualizar Branch_products
                $branchProducts = BranchProduct::from('branch_Products AS bp')
                ->join('products AS pro', 'bp.product_id', '=', 'pro.id')
                ->join('branches AS bra', 'bp.branch_id', '=', 'bra.id')
                ->select('bp.id', 'bp.product_id', 'bp.branch_id', 'bp.stock', 'pro.id AS idP', 'bra.id')
                ->where('bp.product_id', '=', $ncinvoiceProduct->product_id)
                ->where('bp.branch_id', '=', $request->session()->get('branch'))
                ->first();

                $id = $branchProducts->idP;
                $prestock = $branchProducts->stock;
                $stock = $prestock + $ncinvoiceProduct->quantity;
                //Actualizar tabla Branch Products
                $branchProduct = BranchProduct::findOrFail($id);
                $branchProduct->stock = $stock;
                $branchProduct->update();
                //calcular valor para actualizar kardex
                $products = Product::from('products AS pro')
                ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
                ->select('pro.id', 'cat.utility', 'pro.price', 'pro.stock')
                ->where('pro.id', '=', $ip->product_id)
                ->first();

                $id = $products->id;
                $stockardex = $products->stock;
                //Actualizar Kardex
                $kardex = new Kardex();
                $kardex->product_id = $id;
                $kardex->branch_id = $ncinvoice->branch_id;
                $kardex->operation = 'NC_VENTA';
                $kardex->number = $ncinvoice->id;
                $kardex->quantity = $ip->quantity;
                $kardex->stock = $stockardex;
                $kardex->save();
            }

            $invo = Invoice::findOrFail($invoice->id);
            //metodo para uso de abono a otra factura
            if($invo->balance > 0){
                $payEvent = new Payevent();
                $payEvent->origin = $invo->invoice;
                $payEvent->destination = null;
                $payEvent->document = 'FACTURA';
                $payEvent->pay = $invo->pay;
            }
            //actualizando campo status de la factura
            $invoice = Invoice::findOrFail($invoice->id);
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
        ->select('nc.id', 'nc.invoice', 'inv.total', 'inv.totalIva', 'inv.totalPay', 'inv.created_at', 'bra.name as nameB', 'cus.name as nameC', 'inv.invoice as nf', 'use.name')
        ->where('nc.id', '=', $id)->first();

        /*mostrar detalles*/
        $ncinvoiceProducts = NcinvoiceProduct::from('ncinvoice_products AS np')
        ->join('products AS pro', 'np.product_id', '=', 'pro.id')
        ->join('ncinvoices AS nci', 'np.ncinvoice_id', '=', 'nci.id')
        ->select('np.quantity', 'np.price', 'nci.total', 'nci.totalIva', 'nci.totalPay', 'pro.name')
        ->where('np.ncinvoice_id', '=', $id)
        ->get();

        return view('admin.ncinvoice.show', compact('ncinvoices', 'ncinvoiceProducts'));
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
