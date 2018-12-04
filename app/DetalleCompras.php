<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompras extends Model
{
    protected $table = 'detalle_compras';

    protected $fillable = [
   'id_OrdenCompra',
   'id_Producto',
   'cantidad',
    'precio',
    'subTotal'  
];
}
