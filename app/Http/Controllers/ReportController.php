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
        $invoiceTotal = Invoice::sum('totalPay');
        $portfolio = Invoice::sum('balance');
        $pastDuePortfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolioThirty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolioSixty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');
        if (request()->ajax()) {
            if (!empty($request->end)) {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
                ->whereBetween('inv.created_at', [$request->start, $request->end])
                ->get();
            } else {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
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
        return view('admin.report.index', compact('invoiceTotal', 'portfolio', 'pastDuePortfolio', 'portfolioThirty', 'portfolioSixty'));

    }

    public function portfolio()
    {
        $portfolio = Invoice::sum('balance');
        $pastDuePortfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolioThirty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolioSixty = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
                $invoices = Invoice::from('invoices as inv')
                ->join('users as use', 'inv.user_id', 'use.id')
                ->join('branches as bra', 'inv.branch_id', 'bra.id')
                ->join('customers as cus', 'inv.customer_id', 'cus.id')
                ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
                ->where('inv.balance', '>', 0)
                ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (Invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolio', compact('portfolio', 'pastDuePortfolio', 'portfolioThirty', 'portfolioSixty'));
    }

    public function pastDuePortfolio()
    {
        $pastDuePortfolio = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolioThirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolioSixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now())
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.pastDuePortfolio', compact('pastDuePortfolio', 'portfolioThirty', 'portfolioSixty'));
    }

    public function portfolioThirty()
    {
        $pastDuePortfolio = Invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolioThirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolioSixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now()->subDays(30))
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolioThirty', compact('pastDuePortfolio', 'portfolioThirty', 'portfolioSixty'));
    }

    public function portfolioSixty()
    {
        $pastDuePortfolio = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now())
        ->sum('inv.balance');
        $portfolioThirty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(30))
        ->sum('inv.balance');
        $portfolioSixty = invoice::from('invoices as inv')
        ->select('inv.due_date', 'inv.created_at', 'inv.balance')
        ->where('inv.due_date', '<', Carbon::now()->subDays(60))
        ->sum('inv.balance');

        if (request()->ajax()) {
            $invoices = invoice::from('invoices as inv')
            ->join('users as use', 'inv.user_id', 'use.id')
            ->join('branches as bra', 'inv.branch_id', 'bra.id')
            ->join('customers as cus', 'inv.customer_id', 'cus.id')
            ->select('inv.id', 'inv.totalPay', 'inv.balance', 'inv.status', 'inv.created_at', 'inv.due_date', 'use.name', 'bra.name as nameB', 'cus.name as nameC')
            ->where('inv.balance', '>', 0)
            ->where('inv.due_date', '<', Carbon::now()->subDays(60))
            ->get();

            return DataTables()::of($invoices)
            ->editColumn('created_at', function (invoice $invoice) {
                return $invoice->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.report.portfolioSixty', compact('pastDuePortfolio', 'portfolioThirty', 'portfolioSixty'));
    }

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
