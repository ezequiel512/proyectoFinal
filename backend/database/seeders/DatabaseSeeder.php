<?php

use App\Models\Torneos;
use App\Models\Usuarios;
use Facade\FlareClient\Truncation\TruncationStrategy;
use Illuminate\Support\Facades\Hash;
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
        // Obtener algunos torneos existentes
        $torneos = Torneos::inRandomOrder()->limit(5)->get();

        // Obtener algunos usuarios existentes
        $usuarios = Usuarios::inRandomOrder()->limit(10)->get();

        // Asociar usuarios con torneos
        foreach ($torneos as $torneo) {
            $torneo->usuarios()->attach($usuarios);
        }

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Nombre de usuario',
            'correo_electronico' => 'correo@example.com',
            'contrasenya' => Hash::make('contraseña'),
            'rol' => 'administrador',
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
