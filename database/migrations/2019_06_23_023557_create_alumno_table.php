<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->date('fecha_nacimiento');
            $table->enum('genero', ['F', 'M']);
            $table->string('direccion', 400)->nullable();
            $table->char('telefono', 8);
            $table->boolean('estado');
            $table->integer('nivel_id')->unsigned();
            $table->integer('paralelo_id')->unsigned();
            $table->integer('carrera_id')->unsigned();


            $table->foreign('nivel_id')->references('id')->on('nivel');
            $table->foreign('paralelo_id')->references('id')->on('paralelo');
            $table->foreign('carrera_id')->references('id')->on('paralelo');


            

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
        Schema::dropIfExists('alumno');
    }
}
