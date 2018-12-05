<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formapago extends Model
{    
    protected $table = 'forma_pagos';
    protected $primaryKey= 'id';
    protected $fillable = ['descripcion'];
}
