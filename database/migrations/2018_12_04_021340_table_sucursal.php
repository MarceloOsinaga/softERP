<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 50);
            $table->string('direccion', 80)->nullable();
            $table->integer('id_Ciudad')->unsigned();
            $table->timestamps();
            $table->foreign('id_Ciudad')->references('id')->on('Ciudads'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sucursals');
    }
}
