<?php

namespace App\Http\Controllers;

use App\Models\Cash_out;
use App\Http\Requests\StoreCashoutRequest;
use App\Http\Requests\UpdateCashoutRequest;
use App\Models\Cod_verif;
use App\Models\Sale_box;
use App\Models\User;
use App\Models\Verification_code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CashoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        if ($request->ajax()) {
            $cash_outs = Cash_out::get();

            return DataTables::of($cash_outs)
                ->addIndexColumn()
                ->addColumn('user', function (Cash_out $cash_out) {
                    return $cash_out->user->name;
                })
                ->addColumn('adminId', function (Cash_out $cash_out) {
                    return $cash_out->adminId->name;
                })
                ->addColumn('branch', function (Cash_out $cash_out) {
                    return $cash_out->branch->name;
                })
                ->editColumn('created_at', function(Cash_out $cash_out){
                    return $cash_out->created_at->format('yy-m-d');
                })
                ->make(true);
        }

        return view('admin.cash_out.index');*/

        if (request()->ajax()) {
            $cash_outs = Cash_out::from('cash_outs AS cas')
            ->join('sale_boxes AS sal', 'cas.sale_box_id', 'sal.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->join('branches as bra', 'cas.branch_id', 'bra.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'use.name', 'usa.name AS nameA', 'bra.name as nameB')
            ->where('use.id', '=', Auth::user()->id)
            ->get();

            return DataTables::of($cash_outs)
            ->editColumn('created_at', function(Cash_out $cash_out){
                return $cash_out->created_at->format('yy-m-d');
            })
            ->addColumn('btn', 'admin/order/actions')
            ->rawColumns(['btn'])
            ->make(true);
        }
        return view('admin.cash_out.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', 1)->get();
        $sale_box = Sale_box::where('user_id', '=', Auth::user()->id)->where('status', '=', 'open')->first();
        return view("admin.cash_out.create", compact('users', 'sale_box'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCashoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCashoutRequest $request)
    {
        $users = Auth::user()->id;
        $admin_id = $request->admin_id;
        $verific = $request->admin;
        $payment = $request->payment;
        $cod_verif = Verification_code::select('id', 'code')->where('user_id', '=', $admin_id)->first();
        $box_open = Sale_box::where('user_id', '=', $users)->where('status', '=', 'open')->first();

        if($cod_verif == null){
            return redirect("cash_out")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($cod_verif->code != $verific) {
            return redirect("cash_out")->with('warning', 'Error en codigo de verificacion');
        } else {
            $id = $box_open->id;
            $cash_out = new Cash_out();
            $cash_out->user_id     = $users;
            $cash_out->sale_box_id = $id;
            $cash_out->branch_id   = $request->session()->get('branch');
            $cash_out->admin_id    = $request->admin_id;
            $cash_out->payment     = $payment;
            $cash_out->reason      = $request->reason;
            $cash_out->admin       = $request->admin;
            $cash_out->save();

            $sale_box = Sale_box::findOrFail($id);
            $sale_box->out_cash += $payment;
            $sale_box->out_total += $payment;
            $sale_box->departure += $payment;
            $sale_box->update();
        }
        return redirect("cash_out")->with('success', 'Salida creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cash_out  $cash_out
     * @return \Illuminate\Http\Response
     */
    public function show(cash_out $cash_out)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cash_out  $cash_out
     * @return \Illuminate\Http\Response
     */
    public function edit(cash_out $cash_out)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCashoutRequest  $request
     * @param  \App\Models\cash_out  $cash_out
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCashoutRequest $request, cash_out $cash_out)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cash_out  $cash_out
     * @return \Illuminate\Http\Response
     */
    public function destroy(cash_out $cash_out)
    {
        //
    }
}
