<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursals';

    protected $primaryKey= 'id';


    protected $fillable = [
        'nombre', 'direccion','id_ciudad'
    ];
    protected $guarded = [

    ];

    public function siudad(){
        return $this->belongsTo("App\Ciudad", "id_ciudad");
    }
}
