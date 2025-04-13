<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUbigeoDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo_distritos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 6)->unique();
            $table->string('nombre', 100);
            $table->string('provincia_codigo', 4);
            $table->string('departamento_codigo', 2);
            $table->timestamps();

            $table->foreign('provincia_codigo')->references('codigo')->on('ubigeo_provincias')->onDelete('cascade');
            $table->foreign('departamento_codigo')->references('codigo')->on('ubigeo_departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeo_distritos');
    }
}