<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    //
    protected $table = 'detalle_ventas';
    
    protected $primaryKey= 'id_detalle';

    public $timestamps = false;

    protected $fillable = [
    	'id_venta',
    	'id_producto',
    	'cantidad',
    	'precio_venta',
        'descuento'
     
    ];

    protected $guarded = [

    	
    ];

}
