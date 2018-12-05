<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use DB;
class ProveedorController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$proveedors = proveedor::orderBy('id')->paginate(8);
        //return view('proveedor.index', compact('proveedors'));
        if($request)
        {
            //almacenar la busqueda
            $querry =  trim ($request -> get('searchText'));
            //obtener las categorias
            $proveedors = DB::table('proveedors')
                -> where('nombreproveedor','LIKE','%'.$querry.'%')
                -> where('estado','=','1')
                -> orderBy('id', 'asc')
                -> paginate(9);

            return view('proveedor.index', ["proveedors" => $proveedors, "searchText" => $querry]);
        }
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

        $proveedor = proveedor::select()->get();
        return view('proveedor.create')->with('proveedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new proveedor;
        $proveedor->nombreproveedor  = $request->nombreproveedor;
        $proveedor->nombrecontacto  = $request->nombrecontacto;
        $proveedor->direccion  = $request->direccion;
        $proveedor->pais  = $request->pais;
        $proveedor->ciudad  = $request->ciudad;
        $proveedor->email  = $request->email;
        $proveedor->telefono  = $request->telefono;
        $proveedor->cargo  = $request->cargo;
        $proveedor->save();
        return redirect()->route('proveedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proveedors  $proveedors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = proveedor::find($id);
        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedors  $proveedors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //AGREGANDO LA ACCION A BITACORA
         Auth()->user()->registerBinnacle();
        $proveedor = proveedor::findOrFail($id);
        //$proveedors para el select form
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedors  $proveedors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = proveedor::findOrFail($id);
        $proveedor->nombreproveedor  = $request->nombreproveedor;
        $proveedor->nombrecontacto  = $request->nombrecontacto;
        $proveedor->direccion  = $request->direccion;
        $proveedor->pais  = $request->pais;
        $proveedor->ciudad  = $request->ciudad;
        $proveedor->email  = $request->email;
        $proveedor->telefono  = $request->telefono;
        $proveedor->cargo  = $request->cargo;
        $proveedor->save();
        return redirect()->route('proveedors.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedors  $proveedors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $proveedor = proveedor::find($id);
        $proveedor->estado =0;
        $proveedor->save();
        return redirect()->route('proveedors.index');
    }

}
