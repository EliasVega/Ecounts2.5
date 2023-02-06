<?php

namespace App\Http\Controllers;

use App\Models\Auxiliary_account;
use App\Http\Requests\StoreAuxiliary_accountRequest;
use App\Http\Requests\UpdateAuxiliary_accountRequest;
use App\Models\Account;
use App\Models\Account_class;
use App\Models\Account_group;
use App\Models\Subaccount;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AuxiliaryAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $auxiliary_accounts = Auxiliary_account::get();

            return DataTables::of($auxiliary_accounts)
                ->addIndexColumn()
                ->addColumn('class', function (Auxiliary_account $auxiliary_account) {
                    return $auxiliary_account->subaccount->account->account_group->account_class->name;
                })
                ->addColumn('group', function (Auxiliary_account $auxiliary_account) {
                    return $auxiliary_account->subaccount->account->account_group->name;
                })
                ->addColumn('account', function (Auxiliary_account $auxiliary_account) {
                    return $auxiliary_account->subaccount->account->name;
                })
                ->addColumn('subaccount', function (Auxiliary_account $auxiliary_account) {
                    return $auxiliary_account->subaccount->name;
                })
                ->addColumn('edit', 'admin/auxiliary_account/actions')
                ->rawColumns(['edit'])
                ->make(true);
        }

        return view('admin.auxiliary_account.index');
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
        $auxiliary_accounts = Auxiliary_account::get();
        return view('admin.auxiliary_account.create', compact(
            'account_classes',
            'account_groups',
            'accounts',
            'subaccounts',
            'auxiliary_accounts'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuxiliary_accountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuxiliary_accountRequest $request)
    {
        $subaccount = Subaccount::findOrFail($request->subaccount_id);
        $number = $request->code;
        if ($number < 10) {
            $number = $subaccount->code . 0 . $number;
        } else {
            $number = $subaccount->code . $number;
        }

        $auxiliary_account = new Auxiliary_account();
        $auxiliary_account->subaccount_id = $request->subaccount_id;
        $auxiliary_account->code = $number;
        $auxiliary_account->name = $request->name;
        $auxiliary_account->save();

        return redirect("auxiliary_account")->with('warning', 'Cuenta auxiliar creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auxiliary_account  $auxiliary_account
     * @return \Illuminate\Http\Response
     */
    public function show(Auxiliary_account $auxiliary_account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auxiliary_account  $auxiliary_account
     * @return \Illuminate\Http\Response
     */
    public function edit(Auxiliary_account $auxiliary_account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuxiliary_accountRequest  $request
     * @param  \App\Models\Auxiliary_account  $auxiliary_account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuxiliary_accountRequest $request, Auxiliary_account $auxiliary_account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auxiliary_account  $auxiliary_account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auxiliary_account $auxiliary_account)
    {
        //
    }

    public function AccountGroups(Request $request, $id)
    {
        if($request)
        {
            $account_groups = Account_group::where('account_class_id', '=', $id)->get();

            return response()->json($account_groups);
        }
    }

    public function Accounts(Request $request, $id)
    {
        if($request)
        {
            $accounts = Account::where('account_group_id', '=', $id)->get();

            return response()->json($accounts);
        }
    }
    public function Subaccounts(Request $request, $id)
    {
        if($request)
        {
            $subaccounts = Subaccount::where('account_id', '=', $id)->get();

            return response()->json($subaccounts);
        }
    }
    public function AuxAccounts(Request $request, $id)
    {
        if($request)
        {
            $auxiliary_accounts = Auxiliary_account::where('subaccount_id', '=', $id)->get();

            return response()->json($auxiliary_accounts);
        }
    }
}
