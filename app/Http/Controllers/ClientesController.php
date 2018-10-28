<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::orderBy('id')->paginate(5);
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Clientes::select('id','nombre')->get();
        return view('cliente.create')->with('cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Clientes;
        $cliente->nombre  = $request->nombre;
        $cliente->apaterno = $request->apaterno;
        $cliente->amaterno = $request->amaterno;
        $cliente->direccion = $request->direccion;
        $cliente->sexo = $request->sexo;
        $cliente->telefono = $request->celular;
        $cliente->fechanacimiento = $request->fechanacimiento;
        $cliente->nit_ci = $request->nit_ci;
        $cliente->estado = $request->email;
        $cliente->imagen = $request->imagen;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::find($id);
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        //$categorias para el select form
        return view('cliente.index', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->nombre  = $request->nombre;
        $cliente->apaterno = $request->apaterno;
        $cliente->amaterno = $request->amaterno;
        $cliente->direccion = $request->direccion;
        $cliente->sexo = $request->sexo;
        $cliente->telefono = $request->celular;
        $cliente->fechanacimiento = $request->fechanacimiento;
        $cliente->nit_ci = $request->nit_ci;
        $cliente->estado = $request->email;
        $cliente->imagen = $request->imagen;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
