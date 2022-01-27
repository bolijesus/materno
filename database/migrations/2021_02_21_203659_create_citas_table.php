<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->boolean('estado')->comment('true:asistio a la cita; false:No asistio a la cita');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_control');
            $table->dateTime('fecha_proxima');
            $table->unsignedInteger('control_actual');
            $table->unsignedInteger('control_proximo');
            $table->unsignedInteger('cantidad_cita');

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
        Schema::dropIfExists('citas');
    }
}
