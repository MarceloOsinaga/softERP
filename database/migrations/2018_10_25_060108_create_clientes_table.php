<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno')->nullable();
            $table->string('direccion')->nullable();
            $table->string('sexo')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
            $table->date('fechanacimiento')->nullable();
            $table->integer('nit_ci');
            $table->string('estado');
            $table->string('email')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
