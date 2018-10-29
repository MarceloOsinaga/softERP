<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreproveedor');
            $table->string('nombrecontacto', 100)->nullable();
            $table->string('direccion')->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('email', 100)->nullable();       
            $table->integer('telefono')->nullable();
            $table->string('cargo', 100)->nullable();
            $table->tinyInteger('estado')->default(1);
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
        Schema::dropIfExists('proveedors');
    }
}
