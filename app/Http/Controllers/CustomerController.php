<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Regime;
use App\Models\Tax;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $customers = Customer::from('customers AS cus')
            ->join('departments AS dep', 'cus.department_id', '=', 'dep.id')
            ->join('municipalities AS mun', 'cus.municipality_id', '=', 'mun.id')
            ->join('documents AS doc', 'cus.document_id', '=', 'doc.id')
            ->join('liabilities AS lia', 'cus.liability_id', '=', 'lia.id')
            ->join('organizations AS org', 'cus.organization_id', '=', 'org.id')
            ->join('taxes AS tax', 'cus.tax_id', '=', 'tax.id')
            ->select('cus.id', 'dep.name AS nameD', 'mun.name AS nameM', 'cus.name', 'doc.initials', 'lia.name AS nameL', 'org.name AS nameO', 'tax.name AS nameT', 'cus.number', 'cus.address', 'cus.phone', 'cus.email', 'cus.credit_limit', 'cus.used', 'cus.available')->get();

            return datatables()
            ->of($customers)
            ->addColumn('edit', 'admin/customer/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.customer.index');
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
        $documents = Document::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $taxes = Tax::get();
        $regimes = Regime::get();
        return view('admin.customer.create', compact('departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'regimes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $branch = $request->session()->get('branch');
        //
        $customer = new Customer();
        $customer->department_id = $request->department_id;
        $customer->municipality_id = $request->municipality_id;
        $customer->document_id = $request->document_id;
        $customer->liability_id = $request->liability_id;
        $customer->organization_id = $request->organization_id;
        $customer->tax_id = $request->tax_id;
        $customer->regime_id = $request->regime_id;
        $customer->name = $request->name;
        $customer->number = $request->number;
        $customer->dv = $request->dv;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->credit_limit = $request->credit_limit;
        $customer->used = 0;
        $customer->available = $request->credit_limit;
        $customer->save();
        if($branch > 0)
        {
            return back();
            //return redirect("invoice/create");
        }
        else{
            return redirect("customer");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $taxes = Tax::get();
        $regimes = Regime::get();
        return view('admin.customer.create', compact('departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes', 'regime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, $id)
    {
        $cus = Customer::select('id', 'credit_limit', 'used', 'available')
        ->where('id', '=', $id)
        ->first();

        $credit_limit = $cus->credit_limit;
        $used = $cus->used;
        $available = $cus->available;
        $newAval = $credit_limit - $used;
        $customer = Customer::findOrFAil($id);
        $customer->department_id = $request->department_id;
        $customer->municipality_id = $request->municipality_id;
        $customer->document_id = $request->document_id;
        $customer->liability_id = $request->liability_id;
        $customer->organization_id = $request->organization_id;
        $customer->tax_id = $request->tax_id;
        $customer->regime_id = $request->regime_id;
        $customer->name = $request->name;
        $customer->number = $request->number;
        $customer->dv = $request->dv;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->credit_limit = $request->credit_limit;
        $customer->used = $used;
        $customer->available = $newAval;
        $customer->save();

        return redirect("customer");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
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
}
