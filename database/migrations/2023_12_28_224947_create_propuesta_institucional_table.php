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
        Schema::create('propuesta_institucional', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_plan_estudio')->unsigned();
            $table->foreign('id_plan_estudio')->references('id')->on('plan_estudio');
            $table->mediumInteger('id_anio')->unsigned();
            $table->foreign('id_anio')->references('id')->on('anio');
            $table->tinyInteger('id_turno_inicio')->unsigned();
            $table->foreign('id_turno_inicio')->references('id')->on('turno');
            $table->tinyInteger('id_turno_fin')->unsigned();
            $table->foreign('id_turno_fin')->references('id')->on('turno');
            $table->tinyInteger('id_jornada')->unsigned();
            $table->foreign('id_jornada')->references('id')->on('jornada');
            $table->string('nombre', 50);
            $table->year('ciclo_lectivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuesta_institucional');
    }
};
