<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {
            $table->bigIncrements('id_puntos');
            $table->unsignedBigInteger('id_encuentro');
            $table->unsignedBigInteger('id_equipo');
            $table->integer('puntos');
            $table->foreign('id_encuentro')->references('id_encuentro')->on('encuentros');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntos');
    }
}
