<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    
    protected $primaryKey= 'id_venta';

    public $timestamps = false;

    protected $fillable = [
    	'id_cliente',
    	'id_empleado',
        'tipo_comprobante',
        'serie_comprobante',
    	'numero_comprobante',
        'fecha_hora',
        'iva',
        'total_venta',
    	'estado',
    	'id_categoria'
    ];

    protected $guarded = [

    	
    ];
}
