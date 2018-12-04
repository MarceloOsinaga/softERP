<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidoVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_Ventas', function (Blueprint $table) {
            $table->increments('id');             
            $table->string('estado')->default('Pentiente');     /* P=pendient; E=entregado */
            $table->date('fecha_Emision');
            $table->date('fecha_Envio');
            $table->date('fecha_Entrega');
            $table->double('importe');

            $table->integer('id_Empleado')->unsigned();
            $table->integer('id_formaPago')->unsigned();
            $table->timestamps();
            $table->foreign('id_Empleado')->references('id')->on('Empleados');             
            $table->foreign('id_formaPago')->references('id')->on('forma_Pagos'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_Ventas');
    }
}
