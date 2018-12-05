<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\Empleado;
use App\Cliente;
use App\Producto;
use App\Detalle_venta;
use Illuminate\Support\Facades\Imput;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class VentasController extends Controller
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
        $ventas = DB::table('ventas as v') 
        -> join('clientes as p','v.id_cliente','=','p.id')
        -> join('detalle_ventas as dv','v.id_venta','=','dv.id_venta')
        -> select('v.id_venta', 'v.fecha_hora', 'p.nombre', 'p.apaterno', 'v.tipo_comprobante', 'v.serie_comprobante', 'v.numero_comprobante', 'v.iva', 'v.estado', 'v.total_venta')
        -> where('v.numero_comprobante','LIKE','%'.$querry.'%')         
        -> orderBy('v.id_venta', 'asc')
        -> groupBy('v.id_venta', 'v.fecha_hora', 'p.nombre', 'p.apaterno', 'v.tipo_comprobante', 'v.serie_comprobante', 'v.numero_comprobante', 'v.iva', 'v.estado')
        -> paginate(7);
        
        return view('venta/index', ["ventas" => $ventas, "searchText" => $querry]);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::table('clientes') -> get();
        $empleados = DB::table('empleados') -> get();
        $productos = DB::table('productos as p')
      -> select(DB::raw('CONCAT (p.codigo_barra, " - " ,p.nombre) as  producto'), 'p.id','p.stock','p.precio_venta')
      -> where ('p.estado', '=', 'A')
      -> get();

      return view('venta.create', ['empleados' => $empleados, 'productos' => $productos, 'clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    

    	DB::beginTransaction();

		$venta = new Ventas;	    
	    $venta -> id = $request -> get('id_cliente');//este valor es el que se encuentra en el formulario
	    $venta -> tipo_comprobante = $request -> get('tipo_comprobante');
	    $venta -> serie_comprobante = $request -> get('serie_comprobante');
	    $venta -> numero_comprobante = $request -> get('num_comprobante');
        $venta -> total_venta = $request -> get('total_venta');
	    $mytime = Carbon::now('America/Mexico_City');
	    $venta -> fecha_hora = $mytime -> toDateTimeString();
	    $venta -> iva = '16';
	    $venta -> estado = 'A';
	    $venta -> save();

	    $id  = $request -> get('id_articulo');
	    $cantidad = $request -> get('cantidad');
	    $descuento = $request -> get('descuento');
	    $precio_venta = $request -> get('precio_venta');

	    $cont=0;

	    while($cont < count ($id)){

	    	$detalle = new Detalle_venta();
	    	$detalle -> id_venta = $venta -> id_venta;
	    	$detalle -> id_producto = $id_articulo[$cont];
	    	$detalle -> cantidad = $cantidad[$cont];
	    	$detalle -> descuento = $descuento[$cont];
	    	$detalle -> precio_venta = $precio_venta[$cont];
	    	$detalle -> save();
	    	
	    	$cont = $cont+1;
	    }

    	DB::commit();
      return Redirect::to('ventas');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $ventas)
    {
        //
    }
}
