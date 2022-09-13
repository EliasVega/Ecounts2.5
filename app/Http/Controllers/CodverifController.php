<?php

namespace App\Http\Controllers;

use App\Models\Codverif;
use App\Http\Requests\StoreCodverifRequest;
use App\Http\Requests\UpdateCodverifRequest;
use App\Models\User;

class CodverifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $codverifs = Codverif::from('codverifs as cod')
            ->join('users as use', 'cod.user_id', 'use.id')
            ->select('cod.id', 'use.name', 'use.status', 'cod.code')
            ->where('use.status', '=', 'ACTIVO')
            ->get();

            return datatables()
            ->of($codverifs)
            ->addColumn('btn', 'admin/codverif/actions')
            ->addColumn('accesos', 'admin/codverif/eliminar')
            ->rawcolumns(['btn', 'accesos'])
            ->toJson();
        }
        return view('admin.codverif.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', 1)->get();
        return view('admin.codverif.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCodverifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodverifRequest $request)
    {
        $codverif = Codverif::get();
        $id = $request->user_id;
        $cont = 0;
        foreach ($codverif as $key) {
            if($key->user_id == $id)
            $cont ++;
        }
        if ($cont > 0) {
            return redirect('codverif')->with('warning', 'Este Usuario Ya tiene Asignado un Codigo');
        } else {
            $codverif = new Codverif();
            $codverif->user_id = $request->user_id;
            $codverif->code = $request->code;
            $codverif->save();
        }
        return redirect('codverif')->with('success', 'Autorizacion creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Codverif  $codverif
     * @return \Illuminate\Http\Response
     */
    public function show(Codverif $codverif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Codverif  $codverif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $codverif = Codverif::findOrFail($id);
        $user = User::where('id', '=', $codverif->user_id)->first();
        return view('admin.codverif.edit', compact('codverif', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCodverifRequest  $request
     * @param  \App\Models\Codverif  $codverif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCodverifRequest $request, $id)
    {
        $codverif = Codverif::findOrFail($id);
        $codverif->code = $request->code;
        $codverif->update();
        return redirect('codverif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Codverif  $codverif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codverif = Codverif::findOrFail($id);
        $codverif->delete();
        return redirect('codverif');
    }
}
