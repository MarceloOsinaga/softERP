<?php

namespace App\Http\Controllers;

use App\Formapago;
use Illuminate\Http\Request;
use DB;
//use Illuminate\Support\Facades\Request;
//use Symfony\Component\HttpFoundation\Request;

class FormapagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        //$formapagos = Formapago::all()->get('searchText');
        //return view('formapago.index',['formapagos' => $formapagos]);

        if($request)
        {
            //almacenar la busqueda
            $querry =  trim ($request -> get('searchText'));
            //obtener las categorias
            $formapagos = DB::table('forma_pagos')
                -> orderBy('id', 'asc')
                -> paginate(7);

            return view('formapago.index', ["formapago" => $formapagos, "searchText" => $querry]);
        }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $formapago = formapago::select()->get();
        return view('formapago.create')->with('formapago');
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
        $formapago = new formapago;
        $formapago->descripcion  = $request->descripcion;
        $formapago->save();
        return redirect()->route('formapago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formapago  $formapago
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $formapago = Formapago::find($id);
        return view('formapago.show', compact('formapago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formapago  $formapago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();
        $formapago = formapago::findOrFail($id);
        //$categorias para el select form
        return view('formapago.edit', compact('formapago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formapago  $formapago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $formapago = formapago::findOrFail($id);
        $formapago->descripcion  = $request->descripcion;
        $formapago->save();
        return redirect()->route('formapago.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formapago  $formapago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $formapago = formapago::destroy($id);
        return redirect()->route('formapago.index');
    }
}
