<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventarios', function (Blueprint $table) {
            $table->integer('id_Product')->unsigned();
            $table->integer('id_Almacen')->unsigned();
            $table->integer('stock');            

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
        Schema::dropIfExists('Inventarios');
    }
}
