<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goles', function (Blueprint $table) {
            $table->bigIncrements('id_goles');
            $table->unsignedBigInteger('id_jugador');
            $table->unsignedBigInteger('id_encuentro'); 
            $table->integer('total_goles');
            $table->foreign('id_jugador')->references('id_jugador')->on('jugadors');
            $table->foreign('id_encuentro')->references('id_encuentro')->on('encuentros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goles');
    }
}
