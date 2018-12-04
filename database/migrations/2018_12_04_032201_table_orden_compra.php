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
            $table->string('estado')->default('Pendiente');
            $table->date('fecha_Emision');
            $table->double('importe');

            $table->integer('id_Empleado')->unsigned();
            $table->integer('id_Proveedor')->unsigned();
            $table->timestamps();
            $table->foreign('id_Empleado')->references('id')->on('Empleados');             
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
