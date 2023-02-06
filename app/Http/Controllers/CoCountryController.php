<?php

namespace App\Http\Controllers;

use App\Models\Co_country;
use App\Http\Requests\StoreCo_countryRequest;
use App\Http\Requests\UpdateCo_countryRequest;

class CoCountryController extends Controller
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
            $co_countries = Co_country::get();
            return DataTables()::of($co_countries)
            ->addColumn('editar', 'admin/co_country/actions')
            ->rawColumns(['editar'])
            ->toJson();
        }
        return view('admin.co_country.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.co_country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCo_countryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCo_countryRequest $request)
    {
        $co_country = new Co_country();
        $co_country->name = $request->name;
        $co_country->code = $request->code;
        $co_country->code_phone = $request->code_phone;
        $co_country->save();

        return redirect('co_country');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Co_country  $co_country
     * @return \Illuminate\Http\Response
     */
    public function show(Co_country $co_country)
    {
        $co_country = Co_country::findOrFail($co_country->id);
        return view("admin.co_country.show", compact('co_country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Co_country  $co_country
     * @return \Illuminate\Http\Response
     */
    public function edit(Co_country $co_country)
    {
        $co_country = Co_country::findOrFail($co_country->id);
        return view("admin.co_country.edit", compact('co_country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCo_countryRequest  $request
     * @param  \App\Models\Co_country  $co_country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCo_countryRequest $request, Co_country $co_country)
    {
        $co_country->name = $request->name;
        $co_country->code = $request->code;
        $co_country->code_phone = $request->code_phone;
        $co_country->update();
        return redirect('co_country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Co_country  $co_country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Co_country $co_country)
    {
        //
    }
}
