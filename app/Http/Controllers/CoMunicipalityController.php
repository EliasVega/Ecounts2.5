<?php

namespace App\Http\Controllers;

use App\Models\Co_municipality;
use App\Http\Requests\StoreCo_municipalityRequest;
use App\Http\Requests\UpdateCo_municipalityRequest;
use App\Models\Co_country;
use App\Models\Co_department;
use Illuminate\Http\Request;

class CoMunicipalityController extends Controller
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
            $co_municipalities = Co_municipality::get();
            return DataTables()::of($co_municipalities)
            ->addIndexColumn()
            ->addColumn('co_country', function (Co_municipality $co_municipality) {
                return $co_municipality->co_department->co_country->name;
            })
            ->addColumn('co_department', function (Co_municipality $co_municipality) {
                return $co_municipality->co_department->name;
            })
            ->addColumn('editar', 'admin/co_municipality/actions')
            ->rawColumns(['editar'])
            ->toJson();
        }
        return view('admin.co_municipality.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $co_countries = Co_country::get();
        $co_departments = Co_department::get();
        return view("admin.co_municipality.create", compact('co_countries', 'co_departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCo_municipalityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCo_municipalityRequest $request)
    {
        $co_municipality = new Co_municipality();
        $co_municipality->co_department_id = $request->co_department_id;
        $co_municipality->name = $request->name;
        $co_municipality->save();
        return redirect('co_municipality');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Co_municipality  $co_municipality
     * @return \Illuminate\Http\Response
     */
    public function show(Co_municipality $co_municipality)
    {
        return view("admin.co_municipality.show", compact('co_municipality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Co_municipality  $co_municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Co_municipality $co_municipality)
    {
        $co_countries = Co_country::get();
        $co_departments = Co_department::get();
        return view("admin.co_municipality.edit", compact('co_municipality', 'co_departments', 'co_countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCo_municipalityRequest  $request
     * @param  \App\Models\Co_municipality  $co_municipality
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCo_municipalityRequest $request, Co_municipality $co_municipality)
    {
        $co_municipality->co_department_id = $request->co_department_id;
        $co_municipality->name = $request->name;
        $co_municipality->update();
        return redirect('co_municipality');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Co_municipality  $co_municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Co_municipality $co_municipality)
    {
        //
    }

    public function getCoDepartment(Request $request, $id)
    {
        if($request)
        {
            $co_departments = Co_department::where('co_country_id', '=', $id)->get();

            return response()->json($co_departments);
        }
    }
}
