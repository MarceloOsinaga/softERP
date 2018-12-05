<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacturaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_Compras', function (Blueprint $table) {
            $table->increments('numero');            
            $table->date('fecha_Emision');
            $table->integer('Nro_Autorizacion');

            $table->integer('id_OrdenCompra')->unsigned();
            $table->timestamps();             
            $table->foreign('id_OrdenCompra')->references('id')->on('Orden_Compras'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_Compras');
    }
}
