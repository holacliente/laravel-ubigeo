<?php

namespace Holacliente\LaravelUbigeo\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUbigeoProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo_provincias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departamento_id');
            $table->string('nombre', 100);
            $table->string('codigo', 10)->unique();
            $table->timestamps();

            $table->foreign('departamento_id')
                ->references('id')
                ->on('ubigeo_departamentos')
                ->onDelete('cascade');
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
}