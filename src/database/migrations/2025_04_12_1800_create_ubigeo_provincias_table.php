<?php

namespace Holacliente\LaravelUbigeo\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo_provincias', function (Blueprint $table) {
            $table->integer('id_provinciau')->primary();
            $table->string('descripcion', 50);
            $table->string('cod_ubigeo', 6);
            $table->integer('id_departamento_provincia');
            $table->integer('id_pais_provincia');

            // Índice para 'id_departamento_provincia'
            $table->index('id_departamento_provincia', 'Id_Departamento_Provincia_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeo_provincias');
    }
};