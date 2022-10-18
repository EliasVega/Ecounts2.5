<?php

namespace App\Http\Controllers;

use App\Models\Pay_event;
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
                $pay_event = Pay_event::get();
            } else {
                $pay_event = Pay_event::where('user_id', '=', Auth::user()->id)
                ->get();
            }



            return datatables()
            ->of($pay_event)
            ->editColumn('created_at', function(Pay_event $pay){
                return $pay->created_at->format('yy-m-d: h:m');
            })
            ->addColumn('btn', 'admin/pay_event/actions')
            ->rawcolumns(['btn'])
            ->toJson();
        }
        return view('admin.pay_event.index');
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
     * @param  \App\Models\Pay_event  $pay_event
     * @return \Illuminate\Http\Response
     */
    public function show(Pay_event $pay_event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay_event  $pay_event
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_event $pay_event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayeventRequest  $request
     * @param  \App\Models\Pay_event  $pay_event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayeventRequest $request, Pay_event $pay_event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay_event  $pay_event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_event $pay_event)
    {
        //
    }
}
