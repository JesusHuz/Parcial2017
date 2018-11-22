<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('placa')->unique();
            $table->string('cedula')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('duracion');
            $table->string('estado');
            $table->unsignedInteger('propietario_id');

            $table->timestamps();
        });
        //Inspeccion_Auto(Placa, Cédula_propietario, marca, modelo, año y estado_carro)
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspecciones');
    }
}
