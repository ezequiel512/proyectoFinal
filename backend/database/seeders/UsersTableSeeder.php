<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // self::seedUser();
        // $this->command->alert('Tabla inicializada con datos');
    }
    // private function seedUser(){
    //     DB::table('users')->truncate();
    //     DB::table('users')->insert([
    //         'name'=>$_ENV['DATABASE_ADMIN'],
    //         'email'=>$_ENV['DATABASE_EMAIL'],
    //         'password'=>bcrypt($_ENV['DATABASE_PASS'])
    //     ]);
    // }
}
