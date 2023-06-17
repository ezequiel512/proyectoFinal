<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_torneo');
            $table->unsignedInteger('id_usu');
            $table->foreign('id_usu')->references('id_usu')->on('usuarios')->onDelete('cascade');
            $table->unsignedInteger('num_participantes');
            $table->string('juego');
            $table->enum('presencial', ['presencial', 'telematico']);
            $table->string('ubicacion')->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('torneos');
    }
}
