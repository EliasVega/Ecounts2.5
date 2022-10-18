<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $invoice_total = Invoice::sum('total_pay');
        $portfolio = Invoice::sum('balance');
        $past_due_portfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolio_thirty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolio_sixty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');
        if (request()->ajax()) {
            if (!empty($request->end)) {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
                ->whereBetween('inv.created_at', [$request->start, $request->end])
                ->get();
            } else {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
                ->get();
            }
            return DataTables()::of($invoices)
            ->editColumn('created_at', function (Invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->addColumn('editar', 'admin/report/actions')
            ->rawColumns(['editar'])
            ->toJson();
        }
        return view('admin.report.index', compact('invoice_total', 'portfolio', 'portfolio_sixty', 'portfolio_thirty', 'portfolio_sixty'));

    }

    public function portfolio()
    {
        $portfolio = Invoice::sum('balance');
        $past_due_portfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolio_thirty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolio_sixty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
                ->where('inv.balance', '>', 0)
                ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (Invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolio', compact('portfolio', 'portfolio_sixty', 'portfolio_thirty', 'portfolio_sixty'));
    }

    public function portfolio_sixty()
    {
        $past_due_portfolio = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolio_thirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolio_sixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now())
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolio_sixty', compact('portfolio_sixty', 'portfolio_thirty', 'portfolio_sixty'));
    }

    public function portfolio_thirty()
    {
        $past_due_portfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolio_thirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolio_sixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now()->subDays(30))
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolio_thirty', compact('portfolio_sixty', 'portfolio_thirty', 'portfolio_sixty'));
    }
    /*
    public function portfolio_sixty()
    {
        $past_due_portfolio = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolio_thirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolio_sixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.total_pay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now()->subDays(60))
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolio_sixty', compact('portfolio_sixty', 'portfolio_thirty', 'portfolio_sixty'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
