<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Compras;
use App\DetalleCompras;

class CompraController extends Controller
{

    public function index(Request $request)
    {
      if($request)
      {
        //almacenar la busqueda 
        $querry =  trim ($request -> get('searchText'));
        //obtener las categorias
        $orden_compras = DB::table('orden_compras as i') 
        -> join('proveedors as p','i.id_proveedor','=','p.id')
        -> join('detalle_compras as dc','i.id','=','dc.id_OrdenCompra')
        -> select('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombre_Proveedora', DB::raw('sum(dc.cantidad*precio) as total')) 
        -> orderBy('i.id', 'asc')
        -> groupBy('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombre_Proveedora')
        -> paginate(7);
        
        return view('compras.index', ["orden_compras" => $orden_compras, "searchText" => $querry]);
      }
    }

    //create (mostra la vista de crear)
    public function create()
    {
      $proveedors = DB::table('proveedors')->where('estado','=','1')->get();
      $productos= DB::table('productos as pro')
      ->select(DB::raw('CONCAT (pro.codigo_Barra, " - " ,pro.nombre) as producto'), 'pro.id')
      ->where('pro.estado', '=', '1')
      ->get();

      return view('compras.create', ['proveedors' => $proveedors, 'productos' => $productos]);
    }

    // //show (mostrar la vista de show)
    // public function show($id)
    // {
    //   return view ('compras.proveedor.show', ['persona' => Persona::findOrFail($id)]);
    // }

    // //edit (mostrar la vista de editar)
    // public function edit($id)
    // {
    //   return view ('compras.proveedor.edit', ['persona' => Persona::findOrFail($id)]);
    // }

    //store(insertar un registro)
    public function store(Request $request)
    {
      
    try {

    	DB::beginTransaction();

      $orden_compras = new Compras;
      $orden_compras -> estado = 'Aceptado';
      $mytime = Carbon::now('America/Bolivia');
      $orden_compras -> fecha_Emision = $mytime ->toDateTimeString();
      $orden_compras -> importe = $request ->get('importe');
      $orden_compras -> id_Empleado = $request->get('id_Empleado');
      $orden_compras -> id_Proveedor = $request->get('id_Proveedor');
      $orden_compras->save();

      $id_producto = $request ->get('id');
      $cantidad = $request ->get('cantidad');
      $precio = $request ->get('precio');


      $cont=0;

	    while($cont < count ($id_producto)){

	    	$detalle = new DetalleCompras();
	    	$detalle -> id_OrdenCompra = $id_producto -> id;
	    	$detalle -> id_producto = $id_producto[$cont];
	    	$detalle -> cantidad = $cantidad[$cont];
	    	$detalle -> precio_compra = $precio[$cont];
	    	$detalle -> save();
	    	
	    	$cont = $cont+1;
	    }

    	DB::commit();

    } catch (\Exception $e) {
    	DB::rollback();
    }

      return Redirect::to('compras');
    }

    //show
    public function show ($id){

        $orden_compras = DB::table('orden_compras as i') 
        -> join('proveedors as p','i.id_proveedor','=','p.id')
        -> join('detalle_compras as dc','i.id','=','dc.id_OrdenCompra')
        -> select('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombre_Proveedora', DB::raw('sum(dc.cantidad*precio) as total')) 
        ->where('i.id','=', $id)
        ->first();        

        $detalles = DB::table('detalles_ingresos as d') 
         -> join('articulos as a','d.id_articulo','=','a.id_articulo')
         -> select('a.nombre as articulo', 'd.cantidad', 'd.precio_compra')
         -> where ('d.id_ingreso', '=', $id) -> get();

        $detalles = DB::table('detalle_compras as d')
        ->join('productos as a', 'd.id_Producto', '=', 'a.id')
        ->select('a.nombre as producto', 'd.cantidad', 'd.precio')
        ->where('d.id_OrdenCompra', '=', $id)
        ->get();

        return view('compras.show', ['orden_compras' => $orden_compras, 'detalles' => $detalles]);
    }

    //update (actualizar un registro)
    

    //destroy (eliminar logicamente un registro)
    public function destroy($id)
    {
      $orden_compras = Compras::findOrFail($id);
      $orden_compras->estado = 'rechazado';
      $orden_compras->update();

      return Redirect::to('compras');
    }


}
