<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'orden_compras';
    protected $primaryKey= 'id';
    public $timestamps = false;
    protected $fillable = [
    'estado',
    'fecha_Emision',
    'id_Proveedor',
    ];
}
