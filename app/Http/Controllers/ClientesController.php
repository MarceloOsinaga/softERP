<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;


use Vsmoraes\Pdf\Pdf;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


            private $pdf;

   
    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }


    public function index()
    {
        $clientes = Clientes::orderBy('id')->paginate(8);
        return view('cliente.index', compact('clientes'));
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
        $cliente->telefono = $request->telefono;
        $cliente->celular = $request->celular;
        $cliente->fechanacimiento = $request->fechanacimiento;
        $cliente->nit_ci = $request->nit_ci;
        $cliente->estado = $request->estado;
        $cliente->email = $request->email;
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
        //AGREGANDO LA ACCION A BITACORA
         Auth()->user()->registerBinnacle();

        $cliente = Clientes::findOrFail($id);
        //$categorias para el select form
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->nombre  = $request->nombre;
        $cliente->apaterno = $request->apaterno;
        $cliente->amaterno = $request->amaterno;
        $cliente->direccion = $request->direccion;
        $cliente->sexo = $request->sexo;
        $cliente->telefono = $request->telefono;
        $cliente->celular = $request->celular;
        $cliente->fechanacimiento = $request->fechanacimiento;
        $cliente->nit_ci = $request->nit_ci;
        $cliente->estado = $request->estado;
        $cliente->email = $request->email;
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
    public function destroy($id)
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $cliente = Clientes::find($id);
        $cliente->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }


     public function sacarPdf(Request $request)
    {

       



    $direccion=$request->input("direccion");
    $sexo=$request->input("sexo");
    $sexoSelect=$request->input("sexoSelect");

    $celular=$request->input("celular");
    $correo=$request->input("correo");
    $estado=$request->input("estado");


    
    //dd($direccion,$sexo,$sexoSelect,$celular,$correo,$estado,$clientes);


        /*      10000
                11000
                11100
                11110
                11111*/

        if($direccion!=null && $sexo==null && $celular==null && $correo==null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte1')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo!=null && $celular==null && $correo==null && $estado==null){

            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }
            
            

            $html=view('cliente.reporte.reporte2')->with("clientes",$clientes);
        
        }



        if($direccion!=null && $sexo!=null && $celular!=null && $correo==null && $estado==null){

        
            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }
                      

            $html=view('cliente.reporte.reporte3')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo!=null && $celular!=null && $correo!=null && $estado==null){

            if($sexoSelect=="A"){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=="M"){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }

            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }
            

            $html=view('cliente.reporte.reporte4')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo!=null && $celular!=null && $correo!=null && $estado!=null){

            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }
            

            $html=view('cliente.reporte.reporte5')->with("clientes",$clientes);
        
        }



         /*     00000
                00001
                00011
                00111
                01111
                */


        if($direccion==null && $sexo==null && $celular==null && $correo==null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte6')->with("clientes",$clientes);
        
        }


        if($direccion==null && $sexo==null && $celular==null && $correo==null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte7')->with("clientes",$clientes);
        
        }


        if($direccion==null && $sexo==null && $celular==null && $correo!=null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte8')->with("clientes",$clientes);
        
        }


        if($direccion==null && $sexo==null && $celular!=null && $correo!=null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte9')->with("clientes",$clientes);
        
        }

        if($direccion==null && $sexo!=null && $celular!=null && $correo!=null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte10')->with("clientes",$clientes);
        
        }



         /*     
                11010
                11001
                11011
                */



        if($direccion!=null && $sexo!=null && $celular==null && $correo!=null && $estado==null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte11')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo!=null && $celular==null && $correo==null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte12')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo!=null && $celular==null && $correo!=null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte13')->with("clientes",$clientes);
        
        }





         /*     
                10011
                10100
                10010
                10001
                10110
                10101
                10111
                */



        if($direccion!=null && $sexo==null && $celular==null && $correo!=null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte14')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular!=null && $correo==null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte15')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular==null && $correo!=null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte16')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular==null && $correo==null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte17')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular!=null && $correo!=null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte18')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular!=null && $correo==null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte19')->with("clientes",$clientes);
        
        }

        if($direccion!=null && $sexo==null && $celular!=null && $correo!=null && $estado!=null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte20')->with("clientes",$clientes);
        
        }


            /*     
                
                11101
                01000
                01001
                01011
                01101
                01100
                
                */

                   if($direccion!=null && $sexo!=null && $celular!=null && $correo==null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte21')->with("clientes",$clientes);
        
        }


   if($direccion==null && $sexo!=null && $celular==null && $correo==null && $estado==null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte22')->with("clientes",$clientes);
        
        }




   if($direccion==null && $sexo!=null && $celular==null && $correo==null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte23')->with("clientes",$clientes);
        
        }



                

   if($direccion==null && $sexo!=null && $celular==null && $correo!=null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte24')->with("clientes",$clientes);
        
        }



   if($direccion==null && $sexo!=null && $celular!=null && $correo==null && $estado!=null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte25')->with("clientes",$clientes);
        
        }



   if($direccion==null && $sexo!=null && $celular!=null && $correo==null && $estado==null){


            if($sexoSelect=='A'){

                $clientes = DB::table('clientes')->get();        

            }

            if($sexoSelect=='M'){

                $clientes = DB::table('clientes')->where('sexo','M')->get();      

            }
            if($sexoSelect=="F"){

                $clientes = DB::table('clientes')->where('sexo','F')->get();
            }

            $html=view('cliente.reporte.reporte26')->with("clientes",$clientes);
        
        }







            /*     
                
                00010
                00100
                00110
                
                */


            if($direccion==null && $sexo==null && $celular==null && $correo!=null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte27')->with("clientes",$clientes);
        
        }

        
        if($direccion==null && $sexo==null && $celular!=null && $correo==null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte28')->with("clientes",$clientes);
        
        }

        if($direccion==null && $sexo==null && $celular!=null && $correo!=null && $estado==null){

            $clientes = DB::table('clientes')->get();        

            $html=view('cliente.reporte.reporte29')->with("clientes",$clientes);
        
        }



        return $this->pdf
            ->load($html)
            ->download();


    

 }
}
