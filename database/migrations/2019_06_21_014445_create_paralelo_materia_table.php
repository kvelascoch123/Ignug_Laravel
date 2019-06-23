<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParaleloMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paralelo_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paralelo_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->integer('docente_id')->unsigned()->nullable();

            $table->foreign('paralelo_id')->references('id')->on('paralelo');
            $table->foreign('materia_id')->references('id')->on('materia');
            $table->foreign('docente_id')->references('id')->on('docente');

            $table->index(['paralelo_id', 'materia_id']);

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
        Schema::dropIfExists('paralelo_materia');
    }
}
