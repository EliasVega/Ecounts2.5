<?php

namespace App\Http\Controllers;

use App\Models\Payevent;
use App\Http\Requests\StorePayeventRequest;
use App\Http\Requests\UpdatePayeventRequest;
use Illuminate\Support\Facades\Auth;

class PayeventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->role_id;
        if (request()->ajax()) {
            if ($user == 1 || $user == 2) {
                $payEvent = Payevent::get();
            } else {
                $payEvent = Payevent::where('user_id', '=', Auth::user()->id)
                ->get();
            }



            return datatables()
            ->of($payEvent)
            ->editColumn('created_at', function(Payevent $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/payEvent/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.payEvent.index');
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
     * @param  \App\Http\Requests\StorePayeventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayeventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payevent  $payevent
     * @return \Illuminate\Http\Response
     */
    public function show(Payevent $payevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payevent  $payevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Payevent $payevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayeventRequest  $request
     * @param  \App\Models\Payevent  $payevent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayeventRequest $request, Payevent $payevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payevent  $payevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payevent $payevent)
    {
        //
    }
}
