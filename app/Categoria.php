<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $filleable = ['nombre','descripcion','estado'];
}
