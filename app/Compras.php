<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'orden_compras';
    protected $fillable = [
    'estado',
    'fecha_Emision',
    'importe',
    'id_Empleado',
    'id_Proveedor',
    ];
}
