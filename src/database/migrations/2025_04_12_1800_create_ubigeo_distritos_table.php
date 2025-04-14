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
            $table->string('id', 6)->primary();
            $table->string('descripcion', 50);
            $table->string('cod_ubigeo', 6);
            $table->string('provincia_id', 6);
            $table->string('distrito_id', 6);
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