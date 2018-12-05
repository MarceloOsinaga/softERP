<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $primaryKey= 'id';


    protected $fillable = [
        'nombre',
        'apellido_Paterno',
        'apellido_Materno',
        'ci',
        'telefono',
        'direccion',
        'sexo',
        'estado_Civil',
        'email',
        'fecha_Nacimiento',
        'estado',
        'id_Cargo',
        'id_Dpto'
    ];
    protected $guarded = [

    ];

    public function cargos(){
        return $this->belongsTo("APP\Cargo", "id_Cargo");
    }

    public function departamentos(){
        return $this->belongsTo("APP\Departamento", "id_Dpto");
    }

}
