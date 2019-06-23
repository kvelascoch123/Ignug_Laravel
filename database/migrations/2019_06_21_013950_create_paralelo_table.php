<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParaleloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paralelo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nivel_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->string('codigo', 10)->unique();
            $table->char('seccion', 1)->nullable(); //A-B-C
            $table->boolean('estado');

            $table->foreign('nivel_id')->references('id')->on('nivel');
            $table->foreign('docente_id')->references('id')->on('docente');

            $table->index(['nivel_id', 'seccion']);

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
        Schema::dropIfExists('paralelo');
    }
}
