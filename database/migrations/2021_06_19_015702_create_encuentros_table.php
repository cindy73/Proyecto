<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros', function (Blueprint $table) {
            $table->bigIncrements('id_encuentro');
            $table->unsignedBigInteger('id_horario');
            $table->unsignedBigInteger('id_equipo1');
            $table->unsignedBigInteger('id_equipo2');
            $table->boolean('estado');
            $table->date('fecha');
            $table->foreign('id_horario')->references('id_horario')->on('horarios'); 
            $table->foreign('id_equipo1')->references('id_equipo')->on('equipos'); 
            $table->foreign('id_equipo2')->references('id_equipo')->on('equipos'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuentros');
    }
}
