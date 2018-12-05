<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    
    protected $primaryKey= 'id';

    public $timestamps = false;

    protected $fillable = [
    	'codigo_barra',
    	'nombre',
    	'descripcion',
    	'marca',
        'costo_unitario',
    	'precio_venta',
    	'estado',
    	'id_categoria'
    ];

    protected $guarded = [

    	
    ];
}
