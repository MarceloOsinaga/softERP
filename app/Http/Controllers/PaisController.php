<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paiss = pais::orderBy('id')->paginate(8);
        return view('pais.index', compact('paiss'));
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
        $pais = pais::select()->get();
        return view('pais.create')->with('pais');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = new pais;
        $pais->nombre  = $request->nombre;
        $pais->save();
        return redirect()->route('paiss.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paiss  $paiss
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pais = pais::find($id);
        return view('pais.show', compact('pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paiss  $paiss
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();
        $pais = pais::findOrFail($id);
        //$paiss para el select form
        return view('pais.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paiss  $paiss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pais = pais::findOrFail($id);
        $pais->nombre  = $request->nombre;
        $pais->save();
        return redirect()->route('paiss.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paiss  $paiss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();
        $pais = pais::find($id);
        $pais->estado =0;
        $pais->save();
        return redirect()->route('paiss.index');
    }

}
