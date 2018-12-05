<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->string('tipo_comprobante', 50)->upnullable();
            $table->string('serie_comprobante', 50)->upnullable();
            $table->string('numero_comprobante', 50)->nullable();
            $table->datetime('fecha_hora');            
            $table->double('iva');
            $table->double('total_venta');
            $table->char('estado',30);
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_empleado')->references('id')->on('empleados');  
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
        Schema::dropIfExists('ventas');
    }
}
