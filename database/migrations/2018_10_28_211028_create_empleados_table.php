<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellido_Paterno', 30);
            $table->string('apellido_Materno', 30)->nullable();
            $table->integer('ci');
            $table->integer('telefono')->nullable();
            $table->string('direccion', 80)->nullable();
            $table->char('sexo')->default('M');
            $table->char('estado_Civil')->default('S');
            $table->string('email', 50)->nullable();
            $table->date('fecha_Nacimiento');
            $table->char('estado')->default('A');
            $table->integer('id_Cargo')->unsigned();
            $table->integer('id_Dpto')->unsigned();
            $table->foreign('id_Cargo')->references('id')->on('cargos');
            $table->foreign('id_Dpto')->references('id')->on('departamentos');
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
        Schema::dropIfExists('empleados');
    }
}
