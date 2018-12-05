<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_Proveedora', 50);
            $table->string('nombre_Contacto', 80);
            $table->string('cargo_Contacto', 30)->nullable();
            $table->integer('telefono');
            $table->string('email', 80)->nullable();
            $table->string('ciudad', 80)->nullable();
            $table->string('pais', 30)->nullable();
            $table->char('estado')->default('1');
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
        Schema::dropIfExists('Proveedors');
    }
}
