<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('espacio_academico', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('id_propuesta_institucional')->unsigned();
            $table->foreign('id_propuesta_institucional')->references('id')->on('propuesta_institucional');
            $table->tinyInteger('id_seccion_tipo')->unsigned();
            $table->foreign('id_seccion_tipo')->references('id')->on('seccion_tipo');
            $table->string('division', 3);
            $table->string('nombre', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacio_academico');
    }
};
