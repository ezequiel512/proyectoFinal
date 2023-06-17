<?php

use Facade\FlareClient\Truncation\TruncationStrategy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosTorneosSeeder::class);
        $this->call(AddVotesToUsuariosTableSeeder::class);
    }
}

class UsuariosTorneosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Nombre de usuario',
            'correo_electronico' => 'correo@example.com',
            'contrasenya' => 'contraseña',
            'rol' => 'administrador',
            'foto_perfil' => null,
            'descripcion' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('torneos')->insert([
            'nombre_torneo' => 'Nombre del torneo',
            'id_usu' => 1, // ID del usuario que creó el torneo (asumiendo que el usuario con ID 1 existe)
            'num_participantes' => 10,
            'juego' => 'Nombre del juego',
            'presencial' => 'presencial',
            'ubicacion' => null,
            'descripcion' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

class AddVotesToUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->update([
            'n_victorias' => 0,
            'n_torneos_creados' => 0,
            'n_torneos_participados' => 0
        ]);
    }
}
