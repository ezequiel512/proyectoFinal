<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneo_usuario', function (Blueprint $table) {
            $table->unsignedInteger('id_torneo');
            $table->unsignedInteger('id_usu');
            $table->foreign('id_torneo')->references('id_torneo')->on('torneos')->onDelete('cascade');
            $table->foreign('id_usu')->references('id_usu')->on('usuarios')->onDelete('cascade');
            $table->primary(['id_torneo', 'id_usu']);
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
        Schema::dropIfExists('torneo_usuario');
    }
}
