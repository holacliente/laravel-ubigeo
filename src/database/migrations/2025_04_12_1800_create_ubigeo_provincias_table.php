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
            $table->integer('id')->primary();
            $table->string('name', 50);
            $table->string('cod_ubigeo', 6);
            $table->integer('id_departamento_provincia');
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