<?php

use Illuminate\Database\Seeder;

class supervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
             DB::table('supervisors')->insert([
            'usuario'     => $faker->username,
            'nombre'  => $faker->name,
            'correo'      => $faker->unique()->email,
            // 'bio'      => $faker->sentences($nb = 3, $asText = false),
            // 'puesto'  => $faker->jobTitle,

        ]);
            
        }
    }
}
