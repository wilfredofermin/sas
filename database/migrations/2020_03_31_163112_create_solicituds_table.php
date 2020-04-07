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
            $table->integer('servicekit_id')->nullable();
            $table->string('documento',11);
            $table->string('tipoDocumento')->default('Cedula');
            $table->string('nombre', 100);
            $table->string('sn', 100)->nullable();
            $table->string('primerApellido', 100);
            $table->string('segundoApellido', 100)->nullable();
            $table->string('estado')->default('Open');
            $table->string('prioridad')->default('Normal');
            $table->string('departamento',150)->nullable();
            $table->string('puesto',150)->nullable();
            $table->string('localidad')->nullable();
            $table->string('supervisor',150);
            $table->string('registradoPor');
            // $table->interger('user_id')->constrained()->nullable();
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
