<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre', 'apaterno', 'amaterno','direccion','sexo','telefono','celular','fechanacimiento',
        'nit_ci','estado','email','imagen'
    ];
}
