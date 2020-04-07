<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Departamento;

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
        // 
          DB::table('departamentos')->insert([
            'nombre'     => 'Tecnologia',
            'descripcion' =>"",
        ]);
          DB::table('departamentos')->insert([
            'nombre'     => 'Mercadeo',
            'descripcion' =>"",
        ]);
          DB::table('departamentos')->insert([
            'nombre'     => 'Contabilidad',
            'descripcion' =>"",
        ]);
          DB::table('departamentos')->insert([
            'nombre'     => 'Operaciones',
            'descripcion' =>"",
        ]);

    }
}
