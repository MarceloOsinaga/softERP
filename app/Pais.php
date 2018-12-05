<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    protected $primaryKey= 'id';
    protected $filleable = ['nombre','estado'];


    public function ciudad(){
        return $this->hasMany("APP\Ciudad", "id");
    }
}
