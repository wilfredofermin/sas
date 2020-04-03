<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->integer('servicekit_id');
            $table->string('tipoDocumento')->default('Cedula');
            $table->string('estado')->default('Open');
            $table->string('prioridad')->default('Normal');
            $table->string('documento',11);
            $table->string('primerNombre', 100);
            $table->string('segundoNombre', 100)->nullable();
            $table->string('primerApellido', 100);
            $table->string('segundoApellido', 100)->nullable();
            $table->foreignId('user_id')->constrained();
            // USUARIO QUIEN HACE LA SOLICITUD
            // $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('solicituds');
    }
}
