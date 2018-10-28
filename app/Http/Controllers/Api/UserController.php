<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    
    public function aplogin(Request $request){
        //FUNCION PARA AGREGAR EL REGISTRO DE BITACORA AL TXT DE BITACORA
        //Auth()->user()->registerBinnacle();


        $validator = Validator::make($request->all(),[
            'email'=>'required|max:255',
            'password'=>'required',
        ]);
    if($validator->fails()){
        return response()->json([
            'status'=>500,
            'message'=>'Debe ingresar tu usuario y/o contraseña',
        ],500);
    }
    $user = User::where('email','=',$request->input('email'))->first();
    if($user){
        if(Hash::check($request->input('password'),$user->password)){
             return $user;
        }
    }
    return response()->json([
        'status'=>500,
        'message'=>'Usuario/Contraseña incorectos',
    ],500);
}



public function apregister(Request $request){

    $validator = Validator::make($request->all(),[
        'name'=>'required|max:50',
        'email'=>'required|email|max:150|unique:users',
        'password'=>'required',
    ]);
if($validator->fails()){
    return response()->json([
        'status'=>500,
        'message'=>'Ha ocurrido un error inesperado',
        'errors' => $validator->errors(),
    ],500);
}

$user = new User();
$user->name = $request->input("name");
$user->email = $request->input("email");
$user->password = Hash::make($request->input("password"));

if($user->save()){
        return $user;
    }

return response()->json([
    'status'=>500,
    'message'=>'Usuario/Contraseña incorectos',
],500);
}
}
