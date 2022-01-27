<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('documento')->comment('Numero de documento');
            $table->string('tipo_documento');
            $table->string('celular')->nullable();
            $table->string('direccion')->nullable();
            $table->double('semanas_embarazo');
            $table->string('edad');
            $table->dateTime('fecha_nacimiento');
            $table->boolean('control')
                ->default(true)
                ->comment('true: con control, false: sin control');
            $table->boolean('seguimiento')->default(true)
                ->comment('true: primera vez, false: en control');
           
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
        Schema::dropIfExists('pacientes');
    }
}
