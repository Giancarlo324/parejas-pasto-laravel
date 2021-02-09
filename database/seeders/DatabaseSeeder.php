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
			"password" => bcrypt("123456789")
		]);
		DB::table('users')->insert([
            "nombre_apellido" => "Andrea Paz",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco hombre",
            "celular" => "3163965499",
            "me_interesa" => "M",
			"email"=> "andreapazacosta@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Julia Dominga",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco hombre",
            "celular" => "3163965491",
            "me_interesa" => "M",
			"email"=> "juliadominga@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Rosario Montes",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco hombre",
            "celular" => "3163065499",
            "me_interesa" => "M",
			"email"=> "lacantante@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Juan Reyes",
            "sexo" => "M",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco mujer",
            "celular" => "3110065499",
            "me_interesa" => "F",
			"email"=> "juanreyes@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Franco Reyes",
            "sexo" => "M",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco mujer",
            "celular" => "3163965415",
            "me_interesa" => "F",
			"email"=> "francoreyes@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Ruth Uribe",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco mujer",
            "celular" => "3112865499",
            "me_interesa" => "F",
			"email"=> "ruthuribe@gmail.com",
			"password" => bcrypt("123456789")
        ]);
        DB::table('users')->insert([
            "nombre_apellido" => "Norma Elizondo",
            "sexo" => "F",
            "fecha_nacimiento" => "1997/03/09",
            "estudios" => "Universidad de Nariño",
            "sobre_mi" => "Estos son datos sobre mí, busco mujer",
            "celular" => "3163912399",
            "me_interesa" => "M",
			"email"=> "normalelizondo@gmail.com",
			"password" => bcrypt("123456789")
		]);
	}
}
