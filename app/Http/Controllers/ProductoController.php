<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request)
        {
            //almacenar la busqueda
            $querry =  trim ($request -> get('searchText'));
            //obtener las categorias
            $productos = DB::table('productos')
                -> where('nombre','LIKE','%'.$querry.'%')
                -> where('estado','=','A')
                -> orderBy('id', 'asc')
                -> paginate(9);

            return view('producto.index', ["productos" => $productos, "searchText" => $querry]);
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
        
        $categorias = Categoria::select('id','nombre')->get();
        return view('producto.create')->with('categorias',$categorias);
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
        $producto = new Producto;
        $producto->codigo_barra  = $request->codigo_barra;
        $producto->nombre  = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->marca = $request->marca;
        $producto->costo_unitario = $request->costo_unitario;
        $producto->precio_venta = $request->precio_venta;
        $producto->estado = "A";
        $producto->id_categoria = $request->id_categoria;
        $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
