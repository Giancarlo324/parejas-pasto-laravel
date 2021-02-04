<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedUsers()
	{
		//DB::table('users')->delete();

		DB::table('users')->insert([
            "nombre_apellido" => "Giancarlo Rosero",
            "sexo" => "M",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí",
            "celular" => "3163965498",
            "me_interesa" => "F",
			"email"=> "roserogiancarlo@gmail.com",
			"password" => bcrypt("giancarlo123")
		]);
		DB::table('users')->insert([
            "nombre_apellido" => "Andrea Paz",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí",
            "celular" => "3163965499",
            "me_interesa" => "M",
			"email"=> "andreapazacosta@gmail.com",
			"password" => bcrypt("andrea123")
		]);
	}
}
