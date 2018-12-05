<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //protected $table = 'empleados';
    protected $filleable = ['nombre','descripcion','estado'];

    public function empleado(){
        return $this->hasMany("APP\Empleado", "id");
    }

}
