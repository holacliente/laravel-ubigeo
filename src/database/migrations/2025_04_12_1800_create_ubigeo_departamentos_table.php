<?php

namespace Holacliente\LaravelUbigeo\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbigeoDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo_departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->string('codigo', 10)->unique();
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
        Schema::dropIfExists('ubigeo_departamentos');
    }
}