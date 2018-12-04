<?php

namespace App\Http\Controllers;
use App\Cargo;
use Illuminate\Http\Request;
use DB;
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cargos = Cargo::orderBy('id')->paginate(8);
        return view('cargo.index', compact('cargos'));

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

        $cargo = Cargo::select()->get();
        return view('cargo.create')->with('cargo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo;
        $cargo->nombre  = $request->nombre;
        $cargo->descripcion  = $request->descripcion;
        $cargo->save();
        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::find($id);
        return view('cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //AGREGANDO LA ACCION A BITACORA
         Auth()->user()->registerBinnacle();
        $cargo = Cargo::findOrFail($id);
        //$categorias para el select form
        return view('cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->nombre  = $request->nombre;
        $cargo->descripcion  = $request->descripcion;
        $cargo->save();
        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       //AGREGANDO LA ACCION A BITACORA
       Auth()->user()->registerBinnacle();

       $cargo = Cargo::find($id);
       $cargo->estado =0;
       $cargo->save();
       return redirect()->route('cargos.index');
    }
}
