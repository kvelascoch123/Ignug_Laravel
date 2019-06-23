<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoValorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('actividad_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->string('nota', 2)->nullable();

            $table->foreign('alumno_id')->references('id')->on('alumno');
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('materia_id')->references('id')->on('materia');

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
        Schema::dropIfExists('alumno_valor');
    }
}
