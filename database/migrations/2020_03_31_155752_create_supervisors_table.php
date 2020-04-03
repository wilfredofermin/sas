<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // ESTE USUARIO SERA OBTENIDO DESDE EL ACTIVE DIRECTORY
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 100)->unique();
            $table->string('nombre', 199);
            $table->string('correo', 199)->unique();
          
               // Relacion en Puestos
            // $table->unsignedBigInteger('puestos_id');
            // $table->foreign('puestos_id')->references('id')->on('puestos');

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
        Schema::dropIfExists('supervisors');
    }
}
