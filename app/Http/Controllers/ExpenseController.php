<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\Card;
use App\Models\Company;
use App\Models\Department;
use App\Models\Document;
use App\Models\Expense_service;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Pay_expense;
use App\Models\Pay_expense_payment_method;
use App\Models\Payment_form;
use App\Models\Payment_method;
use App\Models\Regime;
use App\Models\Sale_box;
use App\Models\Service;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            //Muestra todas las compras de la empresa
            $expenses = Expense::get();

            return DataTables::of($expenses)
            ->addIndexColumn()
            ->addColumn('supplier', function (Expense $expense) {
                return $expense->supplier->name;
            })
            ->addColumn('branch', function (Expense $expense) {
                return $expense->branch->name;
            })
            ->editColumn('created_at', function(Expense $expense){
                return $expense->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/expense/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.expense.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $suppliers = Supplier::get();
        $regimes = Regime::get();
        $payment_forms = Payment_form::get();
        $payment_methods = Payment_method::get();
        $banks = Bank::get();
        $cards = Card::get();
        $branchs = Branch::get();
        $services = Service::get();

        return view('admin.expense.create', compact(
            'departments',
            'municipalities',
            'documents',
            'liabilities',
            'organizations',
            'suppliers',
            'regimes',
            'payment_forms',
            'payment_methods',
            'banks',
            'cards',
            'branchs',
            'services'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseRequest $request)
    {
        try{
            DB::beginTransaction();
            //Crea un registro de compras

            $service_id = $request->service_id;
            $quantity   = $request->quantity;
            $price      = $request->price;
            $iva        = $request->iva;
            $pay        = $request->pay;
            $branch     = $request->session()->get('branch');

            $expense = new Expense();
            $expense->user_id     = Auth::user()->id;
            $expense->branch_id   = $branch;
            $expense->supplier_id = $request->supplier_id;
            $expense->payment_form_id = $request->payment_form_id;
            $expense->payment_method_id = $request->payment_method_id;
            $expense->document    = $request->document;
            $expense->due_date    = $request->due_date;
            $expense->items       = count($price);
            $expense->total       = $request->total;
            $expense->total_iva    = $request->total_iva;
            $expense->total_pay    = $request->total_pay;
            $expense->note    = $request->note;
            $expense->save();
            if($pay > 0){
                    $pay_expense                   = new Pay_expense();
                    $pay_expense->pay              = $pay;
                    $pay_expense->balance_expense = $expense->total_pay;
                    $pay_expense->user_id          = $expense->user_id;
                    $pay_expense->branch_id        = $expense->branch_id;
                    $pay_expense->expense_id      = $expense->id;
                    $pay_expense->save();

                    $pay_expense_Payment_method                     = new Pay_expense_payment_method();
                    $pay_expense_Payment_method->pay_expense_id    = $pay_expense->id;
                    $pay_expense_Payment_method->payment_method_id  = $request->payment_method_id;
                    $pay_expense_Payment_method->bank_id            = $request->bank_id;
                    $pay_expense_Payment_method->card_id            = $request->card_id;
                    $pay_expense_Payment_method->payment            = $request->pay;
                    $pay_expense_Payment_method->transaction        = $request->transaction;
                    $pay_expense_Payment_method->save();

                $mp = $request->payment_method_id;

                $sale_box = Sale_box::where('user_id', '=', $expense->user_id)->where('status', '=', 'open')->first();
                $out_expense_cash = $sale_box->out_expense_cash;
                $out_cash          = $sale_box->out_cash;
                $cash              = $sale_box->cash;
                $out               = $sale_box->out;
                if($mp == 10){
                    $out_expense_cash += $pay;
                    $out_cash     += $pay;
                    $out            += $pay;
                }
                $totale = $cash - $out;

                $sale_box->out_expense_cash = $out_expense_cash;
                $sale_box->out_expense += $request->pay;
                $sale_box->out_cash = $out_cash;
                $sale_box->out_payment += $pay;
                $sale_box->out = $out;
                $sale_box->cash = $cash;
                $sale_box->total = $totale;
                $sale_box->update();
            }

            //Toma el Request del array

            $cont = 0;
            //Ingresa los productos que vienen en el array
            while($cont < count($service_id)){
                $subtotal = $quantity[$cont] * $price[$cont];
                $ivasub = $subtotal * $iva[$cont]/100;
                $item = $cont + 1;
                $servid = $service_id[$cont];

                $expense_service = new Expense_service();
                $expense_service->expense_id = $expense->id;
                $expense_service->service_id  = $service_id[$cont];
                $expense_service->quantity    = $quantity[$cont];
                $expense_service->price       = $price[$cont];
                $expense_service->iva         = $iva[$cont];
                $expense_service->subtotal    = $subtotal;
                $expense_service->ivasubt     = $ivasub;
                $expense_service->item        = $item;
                $expense_service->save();
                //selecciona el producto que viene del array
                $service = Service::where('id', $expense_service->service_id)->first();


                $cont++;
            }
            $sale_box = Sale_box::where('user_id', '=', $expense->user_id)->where('status', '=', 'open')->first();
            $sale_box->expense += $request->total_pay;
            $sale_box->update();
            DB::commit();
        }
        catch(Exception $e){
            DB::rollback();
        }
        return redirect('expense');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        $expenses = Expense::where('id', $expense->id)->first();
        $expense_services = Expense_service::where('expense_id', $expense->id)->get();

        return view('admin.expense.show', compact('expenses', 'expense_services'));
    }

    public function show_pay_expense($id)
     {

        $expense = Expense::findOrFail($id);
        \session()->put('expense', $expense->id, 60 * 24 * 365);
        \session()->put('due_date', $expense->due_date, 60 * 24 *365);
        \session()->put('total', $expense->total, 60 * 24 *365);
        \session()->put('total_iva', $expense->total_iva, 60 * 24 *365);
        \session()->put('total_pay', $expense->total_Pay, 60 * 24 *365);
        \session()->put('status', $expense->status, 60 * 24 *365);

        return redirect('pay_expense/create');
     }

     public function show_pdf_expense(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense_service = Expense_service::where('expense_id', $id)->get();
        $company = Company::findOrFail(1);
        //dd($expense_service->service->name);

        $days = $expense->created_at->diffInDays($expense->fecven);
        $expensepdf = "COMP-". $expense->expense;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.expense.pdf', compact('expense', 'days', 'expense_service', 'company', 'logo'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$expensepdf.pdf");
        //return $pdf->download("$expensepdf.pdf");
    }

    public function post_expense(Request $request, $id)
    {
        $expense = Expense::where('id', $id)->first();

        $expense_services = Expense_service::where('expense_id', $id)->get();
        /*
        $expense_services = Expense_service::from('expense_services AS es')
        ->join('services AS ser', 'es.service_id', '=', 'ser.id')
        ->join('expenses AS exp', 'es.expense_id', '=', 'exp.id')
        ->join('categories AS cat', 'ser.category_id', '=', 'cat.id')
        ->select('es.id', 'exp.id AS idI', 'exp.created_at', 'exp.total', 'es.quantity', 'es.price', 'ser.name', 'cat.iva')
        ->where('es.expense_id', '=', $id)
        ->get();*/
        /*
        $expenses = Expense_service::where('expense_id', $id)->first();

        $expenses = Product_expense::from('product_expenses AS pp')
        ->join('products AS pro', 'pp.product_id', '=', 'pro.id')
        ->join('expenses AS pur', 'pp.expense_id', '=', 'pur.id')
        ->join('categories AS cat', 'pro.category_id', '=', 'cat.id')
        ->select('pp.id', 'pur.id AS idI', 'pur.created_at', 'pur.total', 'pur.total_iva', 'pur.total_pay', 'pp.quantity', 'pp.price', 'pro.name', 'cat.iva')
        ->where('pp.expense_id', '=', $id)
        ->first();*/

        $company = Company::findOrFail(1);
        /*
        $company = Company::from('companies AS com')
        ->join('departments AS dep', 'com.department_id', '=', 'dep.id')
        ->join('municipalities AS mun', 'com.municipality_id', '=', 'mun.id')
        ->join('liabilities AS lia', 'com.liability_id', '=', 'lia.id')
        ->join('regimes AS reg', 'com.regime_id', '=', 'reg.id')
        ->join('taxes AS tax', 'com.tax_id', '=', 'tax.id')
        ->join('organizations AS org', 'com.organization_id', '=', 'org.id')
        ->select('com.id', 'com.name', 'com.nit', 'com.dv', 'com.logo', 'dep.name AS nameD', 'mun.name AS nameM', 'lia.name AS nameL', 'reg.name AS nameR', 'org.name AS nameO', 'tax.description')
        ->where('com.id', '=', 1)
        ->first();*/

        $days = $expense->created_at->diffInDays($expense->fecven);
        $expensepdf = "FACT-". $expense->document;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.expense.post_expense', compact('expense', 'days', 'expense_services', 'company', 'logo'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper (array(0,0,226.76,497.64), 'portrait');

        return $pdf->stream('vista-pdf', "$expensepdf.pdf");
        //return $pdf->download("$expensepdf.pdf");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
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

    public function pdf_payexpense(Request $request, $id)
    {
        $expense = Expense::where('id', $id)->first();
        $company = Company::where('id', 1)->first();
        $user = auth::user();
        $expense_services = Expense_service::where('pay_expense_id', $id)->get();
        $expensepdf = "FACT-". $expense->id;
        $logo = './imagenes/logos'.$company->logo;
        $view = \view('admin.pay_expense.pdf', compact('expense', 'company', 'logo', 'user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //$pdf->setPaper ( 'A7' , 'landscape' );

        return $pdf->stream('vista-pdf', "$expensepdf.pdf");
        //return $pdf->download("$invoicepdf.pdf");
    }
}
