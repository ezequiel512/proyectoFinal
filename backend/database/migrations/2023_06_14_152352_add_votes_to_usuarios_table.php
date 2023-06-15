<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->integer('n_victorias')->default(0);
            $table->integer('n_torneos_creados')->default(0);
            $table->integer('n_torneos_participados')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('n_victorias');
            $table->dropColumn('n_torneos_creados');
            $table->dropColumn('n_torneos_participados');
        });
    }
}
