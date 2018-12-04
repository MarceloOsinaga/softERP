<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_Barra')->nullable();
            $table->string('nombre', 50)->unique();
            $table->string('descripcion', 80)->nullable();
            $table->string('marca', 50)->nullable();
            $table->double('costo_Unitario');
            $table->double('precio_Venta');
            $table->char('estado')->default('1');
            $table->integer('id_Categoria')->unsigned();
            $table->integer('stock')->unsigned();
            $table->timestamps();
            $table->foreign('id_Categoria')->references('id')->on('Categorias'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
