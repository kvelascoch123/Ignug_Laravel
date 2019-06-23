<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 3)->unique();
            $table->string('nombre', 100);
            $table->integer('carrera_id')->unsigned();;
            $table->enum('tipo_malla',['Nueva', 'Antigua']);//fo
            $table->foreign('carrera_id')->references('id')->on('carrera');
            $table->boolean('estado');
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
        Schema::dropIfExists('nivel');
    }
}
