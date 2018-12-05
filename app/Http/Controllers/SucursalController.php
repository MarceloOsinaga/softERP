<?php

namespace App\Http\Controllers;

use App\Sucursal;
use App\Ciudad;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals = Sucursal::orderBy('id')->paginate(8);
        return view('sucursal.index', compact('sucursals'));
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

          //$ciudad = Ciudad::select()->get();
          //return view('ciudad.create')->with('ciudad');
  
          //$sucursals = Sucursal::select('id','nombre')->get();
          //return view('sucursal.create')->with('sucursals',$sucursals);

          
          $ciudads = Ciudad::select('id','nombre')->get();
          return view('sucursal.create')->with('ciudads',$ciudads);
          //return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal;
        $sucursal->nombre  = $request->nombre;
        $sucursal->direccion  = $request->direccion;
        $sucursal->id_ciudad  = $request->id_ciudad;
        $sucursal->save();
        return redirect()->route('sucursals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //AGREGANDO LA ACCION A BITACORA
          Auth()->user()->registerBinnacle();
       
          //$categorias para el select form
          $sucursal = Sucursal::findOrFail($id);
          $ciudads = DB::table('ciudads')->get();
          return view('ciudad.edit',[
              'sucursal' => $sucursal,
              'ciudads' => $ciudads
              ]);
          //return view('ciudad.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->nombre  = $request->nombre;
        $sucursal->direccion  = $request->direccion;
        $sucursal->id_ciudad  = $request->id_ciudad;
        $sucursal->save();
        return redirect()->route('ciudads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $sucursal = Sucursal::find($id);
        //$categoria->estado =0;
        $sucursal->delete();
        return redirect()->route('sucursals.index');
    }
}
