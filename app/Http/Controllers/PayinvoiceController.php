<?php

namespace App\Http\Controllers;

use App\Models\Pay_invoice;
use App\Http\Requests\StorePayinvoiceRequest;
use App\Http\Requests\UpdatePayinvoiceRequest;
use App\Models\Advance;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Cash_receipt;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Pay_invoice_payment_method;
use App\Models\Payment_method;
use App\Models\Sale_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PayinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $cashReceipts = Cash_receipt::where('type', 'invoice')->get();

            return DataTables::of($cashReceipts)

            ->addIndexColumn()
            ->addColumn('pay_invoice', function (Cash_receipt $cashReceipt) {
                return $cashReceipt->payable->id;
            })
            ->addColumn('pay', function (Cash_receipt $cashReceipt) {
                return number_format($cashReceipt->payable->pay,2);
            })
            ->addColumn('balance_invoice', function (Cash_receipt $cashReceipt) {
                return number_format($cashReceipt->payable->balance_invoice,2);
            })
            ->addColumn('branch', function (Cash_receipt $cashReceipt) {
                return $cashReceipt->payable->branch->name;
            })
            ->addColumn('user', function (Cash_receipt $cashReceipt) {
                return $cashReceipt->payable->user->name;
            })
            ->addColumn('invoice', function (Cash_receipt $cashReceipt) {
                return $cashReceipt->payable->invoice->id;
            })

            ->addColumn('total_pay', function (Cash_receipt $cashReceipt) {
                return number_format($cashReceipt->payable->invoice->total_pay,2);
            })
            ->addColumn('customer', function (Cash_receipt $cashReceipt) {
                return $cashReceipt->payable->invoice->customer->name;
            })

            ->editColumn('created_at', function(Cash_receipt $cashReceipt){
                return $cashReceipt->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/pay_invoice/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.pay_invoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $banks = Bank::get();
        $payment_methods = Payment_method::get();
        $cards = Card::get();
        $invoice = Invoice::where('id', $request->session()->get('invoice'))->first();
        $custom = $invoice->customer->id;
        $advances = Advance::where('status', '!=', 'aplicado')->where('customer_id', $custom)->get();

        return view('admin.pay_invoice.create', compact('invoice', 'banks', 'payment_methods', 'cards', 'advances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayinvoiceRequest $request)
    {
        try{
            DB::beginTransaction();

            $invoice = Invoice::where('id', '=', $request->session()->get('invoice'))->first();
            $balance = $invoice->balance;
            $total = $request->total;

            $pay_invoice = new Pay_invoice();
            $pay_invoice->user_id    = Auth::user()->id;
            $pay_invoice->branch_id  = Auth::user()->branch_id;
            $pay_invoice->invoice_id = $invoice->id;
            $pay_invoice->pay        = $total;
            $pay_invoice->balance_invoice = $balance - $total;
            $pay_invoice->save();

            $cash_receipt = new Cash_receipt();
            $cash_receipt->type = 'invoice';
            $pay_invoice->cashReceipt()->save($cash_receipt);

            $cont = 0;
            $payment_method = $request->payment_method_id;
            $bank           = $request->bank_id;
            $card           = $request->card_id;
            $advance_id       = $request->advance_id;
            $pay            = $request->pay;
            $transaction    = $request->transaction;
            $adv = $request->advance;

            if ($adv != 0) {

                $advance = Advance::findOrFail( $request->advance_id);
                $adv_total = $advance->balance - $adv;

                $advance->destination = $invoice->id;
                if ($adv_total == 0) {
                    $advance->status      = 'aplicado';
                } else {
                    $advance->status      = 'parcial';
                }
                $advance->balance = $adv_total;
                $advance->update();

                $sale_box = Sale_box::where('user_id', '=', $pay_invoice->user_id)->where('status', '=', 'open')->first();
                $sale_box->in_advance = $sale_box->in_advance + $adv;
                $sale_box->update();
            }

            while($cont < count($payment_method)){
                $pay = $request->pay[$cont];
                $pay_invoice_payment_method = new Pay_invoice_payment_method();
                $pay_invoice_payment_method->pay_invoice_id = $pay_invoice->id;
                $pay_invoice_payment_method->payment_method_id = $payment_method[$cont];
                $pay_invoice_payment_method->bank_id = $bank[$cont];
                $pay_invoice_payment_method->card_id = $card[$cont];
                if (isset($advance_id[$cont])){
                    $pay_invoice_payment_method->advance_id = $advance_id[$cont];
                }
                $pay_invoice_payment_method->payment = $pay;
                $pay_invoice_payment_method->transaction = $transaction[$cont];
                $pay_invoice_payment_method->save();

                $mp = $request->payment_method_id;
                $boxy = Sale_box::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'open')
                ->first();
                $in_pay = $boxy->in_pay + $pay;
                $in_pay_cash = $boxy->in_pay_cash;
                $cash = $boxy->cash;
                if($mp == 10){
                    $in_pay_cash += $pay;
                    $cash += $pay;
                }

                $sale_box = Sale_box::findOrFail($boxy->id);
                $sale_box->in_pay_cash = $in_pay_cash;
                $sale_box->in_pay = $in_pay;
                $sale_box->cash = $cash;
                $sale_box->update();

                $cont++;
            }
            $invoic = Invoice::findOrFail($invoice->id);
            $invoic->balance = $balance-$total;
            $invoic->update();

            $pay_invoices = Pay_invoice::findOrFail($pay_invoice->id);
            $pay_invoices->balance_invoice = $balance-$total;
            $pay_invoices->update();

            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('pay_invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cashReceipt = Cash_receipt::where('id', $id)->first();
        $pay_invoice_payment_methods = Pay_invoice_payment_method::where('pay_invoice_id', $cashReceipt->payable->id)->get();

        return view('admin.pay_invoice.show', compact('cashReceipt', 'pay_invoice_payment_methods'));
    }

    public function pdf_pay_invoice(Request $request, $id)
    {
        $cashReceipt = Cash_receipt::findOrFail($id);
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $payInvoice_PaymentMethods = Pay_invoice_payment_method::where('pay_invoice_id', $cashReceipt->payable->id)->get();

        $pdfPayInvoice = "ABONO-". $cashReceipt->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_invoice.pdf', compact('payInvoice_PaymentMethods', 'company', 'logo', 'user', 'cashReceipt'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$pdfPayInvoice.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_invoice $pay_invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayinvoiceRequest  $request
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayinvoiceRequest $request, Pay_invoice $pay_invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay_invoice  $pay_invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_invoice $pay_invoice)
    {
        //
    }

    public function pdf_payinvoice(Request $request, $id)
    {
        $cashReceipt = Cash_receipt::findOrFail($id);
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $pay_invoice_payment_methods = Pay_invoice_payment_method::where('pay_invoice_id', $cashReceipt->payable->id)->get();

        $pdfPayInvoice = "FACT-". $cashReceipt->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_invoice.pdf', compact('payInvoice_paymentMethods', 'company', 'logo', 'cashReceipt', 'user'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$pdfPayInvoice.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }
}
