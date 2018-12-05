<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudads';

    protected $primaryKey= 'id';


    protected $fillable = [
        'nombre', 'id_pais'
    ];
    protected $guarded = [

    ];

    public function pais(){
        return $this->belongsTo("App\Pais", "id_pais");
    }


    public function sucursal(){
        return $this->hasMany("App\Sucursal", "id");
    }
}
