<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMovimientoStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movimiento_Stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('ciudad', 50);
            $table->char('tipo')->default('1');
            $table->integer('id_Product')->unsigned();
            $table->integer('id_Almacen')->unsigned();

            $table->timestamps();
            $table->foreign('id_Product')->references('id')->on('Productos'); 
            $table->foreign('id_Almacen')->references('id')->on('Almacens'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movimiento_Stocks');
    }
}
