<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $filleable = ['nombreproveedor','nombrecontacto', 'direccion', 'pais', 
    'ciudad', 'email', 'telefono', 'cargo', 'estado'];
}
