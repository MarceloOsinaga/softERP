<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $filleable = ['nombre','descripcion','estado'];


    public function empleado(){
        return $this->hasMany("APP\Empleado", "id");
    }
}


