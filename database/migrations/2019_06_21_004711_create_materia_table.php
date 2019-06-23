<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo', 6)->unique();
            $table->string('nombre', 100);
            $table->integer('docente_id')->unsigned();;
            $table->integer('carrera_id')->unsigned();;
            $table->boolean('estado');
            $table->foreign('docente_id')->references('id')->on('docente');
            $table->foreign('carrera_id')->references('id')->on('carrera');
            //id_nivel
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
        Schema::dropIfExists('materia');
    }
}
