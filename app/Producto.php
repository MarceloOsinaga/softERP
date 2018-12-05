<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
    'codigo_Barra',
    'nombre',
    'descripcion',
    'marca',
    'costo_Unitario',
    'precio_Venta',
    'estado',
    'id_Categoria',
    'stock'
    ];
}
