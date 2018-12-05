<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleDescarte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_Descartes', function (Blueprint $table) {
            $table->integer('id_ProductoDescartado')->unsigned();            
            $table->integer('id_Producto')->unsigned();            
            $table->integer('cantidad');
            $table->date('fecha');                      
            $table->timestamps(); 

            $table->foreign('id_ProductoDescartado')->references('id')->on('Orden_Compras');             
            $table->foreign('id_Producto')->references('id')->on('Productos');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_Descartes');
    }
}
