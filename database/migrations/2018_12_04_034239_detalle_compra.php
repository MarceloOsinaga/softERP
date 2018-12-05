<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_Compras', function (Blueprint $table) {
            $table->integer('id_OrdenCompra')->unsigned();
            $table->integer('id_Producto')->unsigned();
            $table->integer('cantidad');
            $table->double('precio');
            $table->double('subTotal');            
            $table->timestamps();

            $table->foreign('id_OrdenCompra')->references('id')->on('Orden_Compras');             
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
        Schema::dropIfExists('detalle_Compras');
    }
}
