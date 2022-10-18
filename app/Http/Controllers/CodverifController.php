<?php

namespace App\Http\Controllers;

use App\Models\Cod_verif;
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
            $cod_verifs = Cod_verif::from('cod_verifs as cod')
            ->join('users as use', 'cod.user_id', 'use.id')
            ->select('cod.id', 'use.name', 'use.status', 'cod.code')
            ->where('use.status', '=', 'ACTIVO')
            ->get();

            return datatables()
            ->of($cod_verifs)
            ->addColumn('btn', 'admin/cod_verif/actions')
            ->addColumn('accesos', 'admin/cod_verif/eliminar')
            ->rawcolumns(['btn', 'accesos'])
            ->toJson();
        }
        return view('admin.cod_verif.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', 1)->get();
        return view('admin.cod_verif.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCodverifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodverifRequest $request)
    {
        $cod_verif = Cod_verif::get();
        $id = $request->user_id;
        $cont = 0;
        foreach ($cod_verif as $key) {
            if($key->user_id == $id)
            $cont ++;
        }
        if ($cont > 0) {
            return redirect('cod_verif')->with('warning', 'Este Usuario Ya tiene Asignado un Codigo');
        } else {
            $cod_verif = new Cod_verif();
            $cod_verif->user_id = $request->user_id;
            $cod_verif->code = $request->code;
            $cod_verif->save();
        }
        return redirect('cod_verif')->with('success', 'Autorizacion creada Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cod_verif  $cod_verif
     * @return \Illuminate\Http\Response
     */
    public function show(Cod_verif $cod_verif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cod_verif  $cod_verif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cod_verif = Cod_verif::findOrFail($id);
        $user = User::where('id', '=', $cod_verif->user_id)->first();
        return view('admin.cod_verif.edit', compact('cod_verif', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCodverifRequest  $request
     * @param  \App\Models\Cod_verif  $cod_verif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCodverifRequest $request, $id)
    {
        $cod_verif = Cod_verif::findOrFail($id);
        $cod_verif->code = $request->code;
        $cod_verif->update();
        return redirect('cod_verif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cod_verif  $cod_verif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cod_verif = Cod_verif::findOrFail($id);
        $cod_verif->delete();
        return redirect('cod_verif');
    }
}
