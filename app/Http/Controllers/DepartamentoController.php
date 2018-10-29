<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::orderBy('id')->paginate(8);
        return view('departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $departamento = Departamento::select()->get();
        return view('departamento.create')->with('departamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new Departamento;
        $departamento->nombre  = $request->nombre;
        $departamento->descripcion  = $request->descripcion;
        $departamento->save();
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamento = Departamento::find($id);
        return view('departamento.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //AGREGANDO LA ACCION A BITACORA
       Auth()->user()->registerBinnacle();
       $departamento = Departamento::findOrFail($id);
       return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->nombre  = $request->nombre;
        $departamento->descripcion  = $request->descripcion;
        $departamento->save();
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //AGREGANDO LA ACCION A BITACORA
       Auth()->user()->registerBinnacle();

       $departamento = Departamento::find($id);
       $departamento->estado =0;
       $departamento->save();
       return redirect()->route('departamentos.index');
    }
}
