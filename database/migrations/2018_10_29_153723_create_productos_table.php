<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_barra')->nullable();
            $table->string('nombre', 50)->unique();
            $table->string('descripcion', 80)->nullable();
            $table->string('marca', 50)->nullable();
            $table->double('costo_unitario');
            $table->double('precio_venta');
            $table->integer('stock');
            $table->char('estado')->default('A'); // A = haceptado R = rechasado
            $table->integer('id_categoria')->unsigned();
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
        Schema::dropIfExists('productos');
    }
}
