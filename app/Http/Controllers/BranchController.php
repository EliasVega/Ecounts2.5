<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Company;
use App\Models\Department;
use App\Models\Municipality;
use App\Models\Salebox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('branch');
        //
        $users = Auth::user()->branch_id;
        if (request()->ajax()) {
            if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {

                //Consulta para mostrar branch a administradores y superadmin
                $branches = Branch::from('branches AS bra')
                ->join('departments AS dep', 'bra.department_id', '=', 'dep.id')
                ->join('municipalities AS mun', 'bra.municipality_id', '=', 'mun.id')
                ->join('companies AS com', 'bra.company_id', '=', 'com.id')
                ->select('bra.id', 'dep.name as nameD', 'mun.name as nameM', 'com.name as nameC', 'bra.name', 'com.nit', 'bra.address', 'bra.phone', 'bra.mobile', 'bra.manager')
                ->get();
            } else {
                //Consulta para mostrar branch a roles 3 -4 -5
                $branches = Branch::from('branches AS bra')
                ->join('departments AS dep', 'bra.department_id', '=', 'dep.id')
                ->join('municipalities AS mun', 'bra.municipality_id', '=', 'mun.id')
                ->join('companies AS com', 'bra.company_id', '=', 'com.id')
                ->select('bra.id', 'dep.name AS nameD', 'mun.name AS nameM', 'com.name AS nameC', 'bra.name', 'com.nit', 'bra.address', 'bra.phone', 'bra.mobile', 'bra.manager')
                ->where('bra.id', '=', $users)
                ->get();
            }

            return datatables()
            ->of($branches)
            ->addColumn('btn', 'admin/branch/actions')
            ->addColumn('accesos', 'admin/branch/actionsaccesos')
            ->rawcolumns(['btn', 'accesos'])
            ->toJson();
        }
        return view('admin.branch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        return view('admin.branch.create', compact('departments', 'municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchRequest $request)
    {
        $company = Company::where('id', '=', 1)->first();
        $branch = new Branch();
        $branch->department_id = $request->department_id;
        $branch->municipality_id = $request->municipality_id;
        $branch->company_id = $company->id;
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phone = $request->phone;
        $branch->mobile = $request->mobile;
        $branch->email = $request->email;
        $branch->manager = $request->manager;
        $branch->save();
        return redirect('branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show($branch)
    {
        $branch = Branch::findOrFail($branch);

        return view('admin.branch.show', compact('branch'));
    }
    //funcion para redirigir a compras
    public function showPurchase($id)
    {
        $branch = Branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);

        /*if($branch->id != 1){
            return redirect("admin/branch")->with('warning', 'Esta branch no esta autorizada para hacer compras');
        }*/

        return redirect('purchase');
    }
    //funcion para redirigir a ventas
    public function showInvoice($id)
    {
        $saleBox = Salebox::select('id')
        ->where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 'ABIERTA')
        ->first();
        if($saleBox == null){
            return redirect("branch")->with('warning', 'Debes tener una caja Abierta para realizar Ventas');
        }
        $branch = Branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);

        return redirect('invoice');
    }

    public function showOrder($id)
    {
        //funcion para redirigir a pedidos
        $saleBox = Salebox::select('id')
        ->where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 'ABIERTA')
        ->first();
        if($saleBox == null){
            return redirect("branch")->with('warning', 'Debes tener una cash Abierta para realizar pedidos');
        }

        $branch = branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);



        return redirect('order');
    }
    //funcion para redirigir a productos sucursal
    public function showProduct($id)
    {
        $branch = Branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);

        return redirect('branchProduct');
    }
    //funcion para redirigir a
    public function showProductBranch($id)
    {
        //
        $branch = branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);

        return redirect('productBranch');
    }
    //funcion para redirigir a caja
    public function showSaleBox($id)
    {
        //
        $branch = branch::findOrFail($id);
        \Session::put('branch', $branch->id, 60 * 24 * 365);
        \Session::put('name', $branch->name, 60 * 24 * 365);

        $user = Auth::user()->branch_id;

        if ($branch->id == $user) {
            if($branch->id == 1){
                return redirect("branch")->with('warning', 'Esta Sucursal No autorizada para tener caja');
            }
            return redirect('saleBox');
        } else {
            return redirect("branch")->with('warning', 'Usuario no autorizado en esta sucursal');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($branch)
    {
        $branch = Branch::findOrFail($branch);
        $departments = Department::get();
        $municipalities = Municipality::get();
        $companies = Company::get();
        return view('admin.branch.edit', compact('branch', 'departments', 'municipalities', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchRequest  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchRequest $request, $branch)
    {
        $company = Company::where('id', '=', 1)->first();
        $branch = Branch::findOrFail($branch);
        $branch->department_id = $request->department_id;
        $branch->municipality_id = $request->municipality_id;
        $branch->company_id = $company->id;
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phone = $request->phone;
        $branch->mobile = $request->mobile;
        $branch->email = $request->email;
        $branch->manager = $request->manager;
        $branch->update();
        return redirect('branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
    //funcion para llevar los municipios al create
    public function getMunicipalities(Request $request, $id)
    {
        if($request)
        {
            $municipalities = Municipality::where('department_id', '=', $id)->get();

            return response()->json($municipalities);
        }
    }

    public function logout()
    {
        session()->forget('branch');

        return redirect('branch');
    }
}
