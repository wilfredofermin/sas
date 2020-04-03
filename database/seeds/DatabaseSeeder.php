<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(departamentoSeeder::class);
        $this->call(localidadSeeder::class);
        $this->call(supervisorSeeder::class);
    }
}
