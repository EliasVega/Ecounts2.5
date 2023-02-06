<?php

namespace App\Http\Controllers;

use App\Models\Co_department;
use App\Http\Requests\StoreCo_departmentRequest;
use App\Http\Requests\UpdateCo_departmentRequest;
use App\Models\Co_country;

class CoDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax())
        {
            $co_departments = Co_department::get();
            return DataTables()::of($co_departments)
            ->addIndexColumn()
            ->addColumn('co_country', function (Co_department $co_department) {
                return $co_department->co_country->name;
            })
            ->addColumn('editar', 'admin/co_department/actions')
            ->rawColumns(['editar'])
            ->make(true);
        }
        return view('admin.co_department.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $co_countries = Co_country::get();
        return view('admin.co_department.create', compact('co_countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCo_departmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCo_departmentRequest $request)
    {
        $co_department = new Co_department();
        $co_department->co_country_id = $request->co_country_id;
        $co_department->name = $request->name;
        $co_department->save();
        return redirect('co_department');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Co_department  $co_department
     * @return \Illuminate\Http\Response
     */
    public function show(Co_department $co_department)
    {
        $co_countries =
        $co_department = Co_department::findOrFail($co_department);
        return view("admin.co_department.show", compact('co_department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Co_department  $co_department
     * @return \Illuminate\Http\Response
     */
    public function edit(Co_department $co_department)
    {
        $co_countries = Co_country::get();
        return view("admin.co_department.edit", compact('co_department', 'co_countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCo_departmentRequest  $request
     * @param  \App\Models\Co_department  $co_department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCo_departmentRequest $request, Co_department $co_department)
    {
        $co_department->co_country_id = $request->co_country_id;
        $co_department->name = $request->name;
        $co_department->update();
        return redirect('co_department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Co_department  $co_department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Co_department $co_department)
    {
        //
    }
}
