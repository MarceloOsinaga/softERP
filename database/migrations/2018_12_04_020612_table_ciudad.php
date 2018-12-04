<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ciudads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->integer('id_Pais')->unsigned();
            $table->timestamps();
            $table->foreign('id_Pais')->references('id')->on('Pais'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ciudads');
    }
}
