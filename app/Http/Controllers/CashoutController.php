<?php

namespace App\Http\Controllers;

use App\Models\Cashout;
use App\Http\Requests\StoreCashoutRequest;
use App\Http\Requests\UpdateCashoutRequest;
use App\Models\Codverif;
use App\Models\Salebox;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CashoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $cashOuts = Cashout::from('cashouts AS cas')
            ->join('saleboxes AS sal', 'cas.salebox_id', 'sal.id')
            ->join('users AS use', 'cas.user_id', 'use.id')
            ->join('users AS usa', 'cas.admin_id', 'usa.id')
            ->join('branches as bra', 'cas.branch_id', 'bra.id')
            ->select('cas.id', 'cas.payment', 'cas.created_at', 'use.name', 'usa.name AS nameA', 'bra.name as nameB')
            ->where('use.id', '=', Auth::user()->id)
            ->get();

            return datatables()
            ->of($cashOuts)
            ->addColumn('edit', 'admin/cashOut/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.cashOut.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', 1)->get();
        $saleBox = Salebox::where('user_id', '=', Auth::user()->id)->where('status', '=', 'ABIERTA')->first();
        $cash = $saleBox->cash;
        return view("admin.cashOut.create", compact('users', 'saleBox', 'cash'));
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
        $codverif = Codverif::select('id', 'code')->where('user_id', '=', $admin_id)->first();
        $boxOpen = Salebox::where('user_id', '=', $users)->where('status', '=', 'ABIERTA')->first();

        if($codverif == null){
            return redirect("cashOut")->with('warning', 'Usuario No autorizado para ejercer como administrador');
        }

        if ($codverif->code != $verific) {
            return redirect("cashOut")->with('warning', 'Error en codigo de verificacion');
        } else {
            $id = $boxOpen->id;
            $cashOut           = new Cashout();
            $cashOut->user_id  = $users;
            $cashOut->saleBox_id  = $id;
            $cashOut->branch_id  = $request->session()->get('branch');
            $cashOut->admin_id = $request->admin_id;
            $cashOut->payment    = $payment;
            $cashOut->admin    = $request->admin;
            $cashOut->save();

            $boxy = Salebox::findOrFail($id);
            $out = $boxy->outCash + $payment;

            $saleBox = Salebox::findOrFail($id);
            $saleBox->outCash = $out;
            $saleBox->update();
        }
        return redirect("cashOut")->with('success', 'Salida creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cashout  $cashout
     * @return \Illuminate\Http\Response
     */
    public function show(Cashout $cashout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cashout  $cashout
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashout $cashout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCashoutRequest  $request
     * @param  \App\Models\Cashout  $cashout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCashoutRequest $request, Cashout $cashout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cashout  $cashout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashout $cashout)
    {
        //
    }
}
