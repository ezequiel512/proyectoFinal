<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usu');
            $table->string('nombre_usuario');
            $table->string('correo_electronico')->unique();
            $table->string('contrasenya');
            $table->enum('rol', ['administrador', 'creador', 'participante', 'ambos']);
            $table->text('foto_perfil')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
