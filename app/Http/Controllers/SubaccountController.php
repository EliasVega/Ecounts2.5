<?php

namespace App\Http\Controllers;

use App\Models\Subaccount;
use App\Http\Requests\StoreSubaccountRequest;
use App\Http\Requests\UpdateSubaccountRequest;
use App\Models\Account;
use App\Models\Account_class;
use App\Models\Account_group;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubaccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $subaccounts = Subaccount::get();

            return DataTables::of($subaccounts)
                ->addIndexColumn()
                ->addColumn('class', function (Subaccount $subaccount) {
                    return $subaccount->account->account_group->account_class->name;
                })
                ->addColumn('group', function (Subaccount $subaccount) {
                    return $subaccount->account->account_group->name;
                })
                ->addColumn('account', function (Subaccount $subaccount) {
                    return $subaccount->account->name;
                })
                ->addColumn('edit', 'admin/subaccount/actions')
                ->rawColumns(['edit'])
                ->make(true);
        }

        return view('admin.subaccount.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account_classes = Account_class::get();
        $account_groups = Account_group::get();
        $accounts = Account::get();
        $subaccounts = Subaccount::get();
        return view('admin.subaccount.create', compact('account_classes', 'account_groups', 'accounts', 'subaccounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubaccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubaccountRequest $request)
    {
        $account = Account::findOrFail($request->account_id);
        $number = $request->code;
        if ($number < 10) {
            $number = $account->code . 0 . $number;
        } else {
            $number = $account->code . $number;
        }

        dd($number);

        $subaccount = new Subaccount();
        $subaccount->account_id = $request->account_id;
        $subaccount->code = $request->code;
        $subaccount->name = $request->name;
        $subaccount->save();

        return redirect("subaccount")->with('warning', 'Subcuenta creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subaccount  $subaccount
     * @return \Illuminate\Http\Response
     */
    public function show(Subaccount $subaccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subaccount  $subaccount
     * @return \Illuminate\Http\Response
     */
    public function edit(Subaccount $subaccount)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubaccountRequest  $request
     * @param  \App\Models\Subaccount  $subaccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubaccountRequest $request, Subaccount $subaccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subaccount  $subaccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subaccount $subaccount)
    {
        //
    }
    public function getAccountGroups(Request $request, $id)
    {
        if($request)
        {
            $account_groups = Account_group::where('account_class_id', '=', $id)->get();

            return response()->json($account_groups);
        }
    }

    public function getAccounts(Request $request, $id)
    {
        if($request)
        {
            $accounts = Account::where('account_group_id', '=', $id)->get();

            return response()->json($accounts);
        }
    }
    public function getSubaccounts(Request $request, $id)
    {
        if($request)
        {
            $subaccounts = Subaccount::where('account_id', '=', $id)->get();

            return response()->json($subaccounts);
        }
    }
}
