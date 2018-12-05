<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Pais;
use Illuminate\Http\Request;
use DB;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $ciudads = Ciudad::orderBy('id')->paginate(8);
        return view('ciudad.index', compact('ciudads'));
       /* if($request)
        {
            //almacenar la busqueda
            $querry =  trim ($request -> get('searchText'));
            //obtener las categorias
            $ciudads = DB::table('ciudads')
                -> where('nombre','LIKE','%'.$querry.'%')
                -> orderBy('id', 'asc')
                -> paginate(7);

            return view('ciudad.index', ["ciudads" => $ciudads, "searchText" => $querry]);*/
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

        $pais = Pais::select('id','nombre')->get();
        return view('ciudad.create')->with('pais',$pais);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = new Ciudad;
        $ciudad->nombre  = $request->nombre;
        $ciudad->id_pais  = $request->id_pais;
        $ciudad->save();
        return redirect()->route('ciudads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();
       
        //$categorias para el select form
        $ciudad = Ciudad::findOrFail($id);
        $pais = DB::table('pais')->get();
        return view('ciudad.edit',[
            'ciudad' => $ciudad,
            'pais' => $pais
            ]);
        //return view('ciudad.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->nombre  = $request->nombre;
        $ciudad->id_pais  = $request->id_pais;
        $ciudad->save();
        return redirect()->route('ciudads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $ciudad = Ciudad::find($id);
        //$categoria->estado =0;
        $ciudad->delete();
        return redirect()->route('ciudads.index');
    }
}
