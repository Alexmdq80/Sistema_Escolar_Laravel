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
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedInteger('id_persona')->unique();
            $table->foreign('id_persona')->references('id')->on('persona');
            $table->unsignedInteger('id_persona_firma')->nullable();
            $table->foreign('id_persona_firma')->references('id')->on('persona');
            $table->unsignedsmallInteger('id_plan_estudio');
            $table->foreign('id_plan_estudio')->references('id')->on('plan_estudio');
            $table->unsignedmediumInteger('id_anio');
            $table->foreign('id_anio')->references('id')->on('anio');
            $table->unsignedInteger('id_propuesta_institucional');
            $table->foreign('id_propuesta_institucional')->references('id')->on('propuesta_institucional');
            $table->unsignedbigInteger('id_espacio_academico');
            $table->foreign('id_espacio_academico')->references('id')->on('espacio_academico');
            $table->unsignedMediumInteger('id_escuela_procedencia')->nullable();
            $table->foreign('id_escuela_procedencia')->references('id')->on('escuela');
            $table->unsignedMediumInteger('id_escuela_destino');
            $table->foreign('id_escuela_destino')->references('id')->on('escuela');
            $table->unsignedTinyInteger('id_nivel_procedencia')->nullable();
            $table->foreign('id_nivel_procedencia')->references('id')->on('nivel');
            $table->unsignedTinyInteger('id_modalidad_procedencia')->nullable();
            $table->foreign('id_modalidad_procedencia')->references('id')->on('modalidad');
            $table->unsignedTinyInteger('id_condicion')->nullable();
            $table->foreign('id_condicion')->references('id')->on('condicion');
            $table->unsignedTinyInteger('id_ciclo_lectivo');
            $table->foreign('id_ciclo_lectivo')->references('id')->on('ciclo_lectivo');
            $table->string('codigo_abc', 10)->nullable();
            $table->boolean('proyecto_inclusion_si');
            $table->boolean('concurre_especial_si');
            $table->boolean('asistente_externo_si');
            $table->boolean('activo');
            $table->boolean('pase');
            $table->boolean('sinpase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcion');
    }
};
