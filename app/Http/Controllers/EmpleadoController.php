<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Cargo;
use App\Departamento;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            //almacenar la busqueda
            $querry =  trim ($request -> get('searchText'));
            //obtener las categorias
            $empleados = DB::table('empleados')
                -> where('nombre','LIKE','%'.$querry.'%')
                -> where('estado','=','A')
                -> orderBy('id', 'asc')
                -> paginate(9);

            return view('empleado.index', ["empleados" => $empleados, "searchText" => $querry]);
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

        //$empleado = Empleado::select('id','nombre')->get();
        //return view('empleado.create')->with('empleado');
        $cargos = Cargo::select('id','nombre')->get();
        $departamentos = Departamento::select('id','nombre')->get();
        return view('empleado.create')->with('cargos',$cargos)->with('departamentos',$departamentos);
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
       $empleado = new Empleado;
        $empleado->nombre  = $request->nombre;
        $empleado->apellido_Paterno = $request->apellido_Paterno;
        $empleado->apellido_Materno = $request->apellido_Materno;
        $empleado->ci = $request->ci;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->sexo = $request->sexo;
        $empleado->estado_Civil = $request->estado_Civil;
        $empleado->email = $request->email;
        $empleado->fecha_Nacimiento = $request->fecha_Nacimiento;
        $empleado->estado = "A";
        $empleado->id_Cargo = $request->id_Cargo;
        $empleado->id_Dpto = $request->id_Dpto;
        $empleado->save();
        return redirect()->route('empleados.index');
        //return dd($empleado->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

       
        //$categorias para el select form
        //return view('cliente.edit', compact('cliente'));

        //$empleado = Empleado::findOrFail($id);
         $empleado = Empleado::findOrFail($id);
        $cargos = DB::table('cargos')->get();
        $departamentos = DB::table('departamentos')->get();
        return view('empleado.edit',[
            'empleado' => $empleado,
            'cargos' => $cargos,
            'departamentos' => $departamentos
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->nombre  = $request->nombre;
        $empleado->apellido_Paterno = $request->apellido_Paterno;
        $empleado->apellido_Materno = $request->apellido_Materno;
        $empleado->ci = $request->ci;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->sexo = $request->sexo;
        $empleado->estado_Civil = $request->estado_Civil;
        $empleado->email = $request->email;
        $empleado->fecha_Nacimiento = $request->fecha_Nacimiento;
        $empleado->estado = "A";
        $empleado->id_Cargo = $request->id_Cargo;
        $empleado->id_Dpto = $request->id_Dpto;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $empleado = Empleado::find($id);
        $cliente->estado ="NA";
        $cliente->save();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
