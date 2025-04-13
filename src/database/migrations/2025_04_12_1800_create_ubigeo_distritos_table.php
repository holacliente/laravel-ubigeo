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
        Schema::create('ubigeo_distritos', function (Blueprint $table) {
            $table->integer('id_distritou')->primary();
            $table->string('descripcion', 50);
            $table->string('cod_ubigeo', 6);
            $table->integer('id_provincia_distrito');

            // Índice para 'id_provincia_distrito'
            $table->index('id_provincia_distrito', 'Id_Provincia_Distrito_idx');
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
};