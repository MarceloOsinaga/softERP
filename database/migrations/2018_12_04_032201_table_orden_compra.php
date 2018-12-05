<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOrdenCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orden_Compras', function (Blueprint $table) {
            $table->increments('id');            
            $table->char('estado')->default('A');
            $table->date('fecha_Emision');
            $table->integer('id_Proveedor')->unsigned();
            $table->timestamps();            
            $table->foreign('id_Proveedor')->references('id')->on('Proveedors'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orden_Compras');
    }
}
