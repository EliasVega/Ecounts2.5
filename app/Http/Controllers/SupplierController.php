<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Tax;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $suppliers = Supplier::from('suppliers AS sup')
            ->join('departments AS dep', 'sup.department_id', '=', 'dep.id')
            ->join('municipalities AS mun', 'sup.municipality_id', '=', 'mun.id')
            ->join('documents AS doc', 'sup.document_id', '=', 'doc.id')
            ->join('liabilities AS lia', 'sup.liability_id', '=', 'lia.id')
            ->join('organizations AS org', 'sup.organization_id', '=', 'org.id')
            ->join('taxes AS tax', 'sup.tax_id', '=', 'tax.id')
            ->select('sup.id', 'dep.name AS nameD', 'mun.name AS nameM', 'lia.name AS nameL', 'org.name AS nameO', 'tax.name AS nameT', 'sup.name', 'sup.number', 'sup.address', 'sup.phone', 'sup.email', 'sup.contact', 'sup.phoneContact')
            ->get();

            return datatables()
            ->of($suppliers)
            ->addColumn('edit', 'admin/supplier/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.supplier.index');
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
        return view('admin.supplier.create', compact('departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        $branch = $request->session()->get('branch');

        $supplier = new Supplier();
        $supplier->department_id = $request->department_id;
        $supplier->municipality_id = $request->municipality_id;
        $supplier->document_id = $request->document_id;
        $supplier->liability_id = $request->liability_id;
        $supplier->organization_id = $request->organization_id;
        $supplier->tax_id = $request->tax_id;
        $supplier->name = $request->name;
        $supplier->number = $request->number;
        $supplier->dv = $request->dv;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->contact = $request->contact;
        $supplier->phoneContact = $request->phoneContact;
        $supplier->save();

        if($branch > 0)
        {
            return redirect("purchase/create");
        }
        else{
            return redirect('supplier');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        $departments = Department::get();
        $municipalities = Municipality::get();
        $documents = Document::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $taxes = Tax::get();
        return view('admin.supplier.edit', compact('supplier', 'departments', 'municipalities', 'documents', 'liabilities', 'organizations', 'taxes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->department_id = $request->department_id;
        $supplier->municipality_id = $request->municipality_id;
        $supplier->document_id = $request->document_id;
        $supplier->liability_id = $request->liability_id;
        $supplier->organization_id = $request->organization_id;
        $supplier->tax_id = $request->tax_id;
        $supplier->name = $request->name;
        $supplier->number = $request->number;
        $supplier->dv = $request->dv;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->contact = $request->contact;
        $supplier->phoneContact = $request->phoneContact;
        $supplier->update();
        return redirect('supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
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
