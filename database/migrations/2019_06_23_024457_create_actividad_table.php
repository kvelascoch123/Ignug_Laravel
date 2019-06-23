<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['ACT_INV', 'ACT_VIN', 'TRAB_PRAC', 'EVAL', 'EXA', 'EXA_RECUP']);
            $table->float('porcentaje', 8, 2);
            $table->string('descripcion', 100);

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
        Schema::dropIfExists('alumno_evaluacion');
    }
}
