<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('localizaciones_id');
            $table->foreign('localizaciones_id')->references('id')->on('localizaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('m2');
            $table->string('banos');
            $table->string('habitaciones');
            $table->string('enlace');
            $table->string('telefono');
            $table->text('descripcion');
            $table->string('precio');
            $table->string('longitud');
            $table->string('latitud');
            $table->json('caracteristicas');
            $table->json('imagenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}
