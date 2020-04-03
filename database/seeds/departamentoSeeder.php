<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\departamento;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
             DB::table('departamentos')->insert([
             'nombre' => $faker->bs,
            'Descripcion'  => $faker->catchPhrase ,
           
        ]);
            
        }
    }
}
