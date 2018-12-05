<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
<<<<<<< HEAD
=======
    
>>>>>>> ac93f5b9551180d4609faa2954d8b9bcb382d361
    protected $primaryKey= 'id';
    public $timestamps = false;

    protected $fillable = [
    	'codigo_barra',
    	'nombre',
    	'descripcion',
    	'marca',
        'costo_unitario',
        'precio_venta',
        'stock',
    	'estado',
    	'id_categoria'
    ];

    protected $guarded = [

    	
    ];
}
