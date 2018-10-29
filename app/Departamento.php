<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $filleable = ['nombre','descripcion','estado'];
}
