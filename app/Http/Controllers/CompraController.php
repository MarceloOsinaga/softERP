<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CompraFormRequest;
use DB;
use App\Compras;
use App\DetalleCompras;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

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
        -> select('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombreproveedor', DB::raw('sum(dc.cantidad*precio) as total')) 
        -> orderBy('i.id', 'asc')
        -> groupBy('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombreproveedor')
        -> paginate(7);
        
        return view('compras.index', ["orden_compras" => $orden_compras, "searchText" => $querry])->with('compras');
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
      //tabla orden_compra
      $orden_compras = new Compras;
      $orden_compras -> estado = 'Pendiente';
      $mytime = Carbon::now('America/Mexico_City');
      $orden_compras -> fecha_Emision = $mytime ->toDateTimeString();
      $orden_compras-> id_Proveedor = '1';
     // $orden_compras -> id_Proveedor = $request->get('id_Proveedor');
      $orden_compras->save();

      $id_producto = $request ->get('id_producto');
      $cantidad = $request ->get('cantidad');
      $precio = $request ->get('precio');
      //dd($request->all());
     // dd($request->all());
      $cont=0;
      $CanRregistros = count ($id_producto);

      // tabla detalle_compra
	    while($cont < $CanRregistros ){
        $detalle = new DetalleCompras();  

	    	$detalle -> id_OrdenCompra = $orden_compras -> id;
	    	$detalle -> id_Producto = $id_producto[$cont];
	    	$detalle -> cantidad = $cantidad[$cont];
        $detalle -> precio = $precio[$cont];        
	    	$detalle -> save();
        $cont = $cont+1;        
       // return redirect()->route('compras.prueba',['detalle' => $detalle->info, 'orden_compras' => $orden_compras->info]);
	    }

  
   //dd($request->all());
     return redirect()->route('compras.index');
      //return Redirect::to('compras');
    }

    //show
    public function show ($id){

        $orden_compras = DB::table('orden_compras as i') 
        -> join('proveedors as p','i.id_Proveedor','=','p.id')
        -> join('detalle_compras as dc','i.id','=','dc.id_OrdenCompra')
        -> select('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombreproveedor','p.nombre_Contacto', DB::raw('sum(dc.cantidad*precio) as total')) 
        ->where('i.id','=', $id)
        -> groupBy('i.id', 'i.estado', 'i.fecha_Emision', 'p.nombreproveedor','p.nombre_Contacto')
        ->first();        

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
      $orden_compras = Compras::find($id);
      $orden_compras->estado ='rechazado';
      $orden_compras->save();
      return redirect()->route('compras.index');
    }


}
