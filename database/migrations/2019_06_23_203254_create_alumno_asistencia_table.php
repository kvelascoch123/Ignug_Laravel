<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_asistencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horasTotalAsistidas');
            $table->integer('alumno_id')->unsigned();
            $table->integer('asistencia_id')->unsigned(); //para control de horas

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
        Schema::dropIfExists('alumno_asistencia');
    }
}
