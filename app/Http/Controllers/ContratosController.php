<?php

namespace App\Http\Controllers;

use App\contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['contratos']=contratos::paginate(5);
        return view('contratos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datoContratos=request()->except('_token');
        contratos::insert($datoContratos);
        return redirect('contratos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(contratos $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contratos=contratos::findOrFail($id);
        return view('contratos.edit',compact('contratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datoContratos=request()->except(['_token','_method']);
        contratos::where('id','=',$id)->update($datoContratos);
        return redirect('contratos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        contratos::destroy($id);
        return redirect('contratos');
    }
}
