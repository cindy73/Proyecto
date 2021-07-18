<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->bigIncrements('id_jugador');
            $table->unsignedBigInteger('id_equipo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->boolean('capitan');
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
        Schema::dropIfExists('jugadors');
    }
}
