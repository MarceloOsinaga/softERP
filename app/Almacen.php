<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'ciudads';

    protected $primaryKey= 'id';


    protected $fillable = [
        'nombre', 'id_sucursal'
    ];
    protected $guarded = [

    ];
}
