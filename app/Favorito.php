<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $filleable = ['nombre','url','user_id'];


    public function sucursal(){
        return $this->belongsTo("App\Usuario","user_id");
    }
}
