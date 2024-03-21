<?php

namespace Database\Seeders;

use App\Models\Propuesta_Institucional;
use App\Models\Anio;
use App\Models\Plan_Estudio;
use App\Models\Turno;
use Illuminate\Database\Seeder;

class Propuesta_InstitucionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $registros = Propuesta_Institucional::count();
        $anios = Anio::get();
        $plan = new Plan_Estudio();
        $turno = new Turno();

        if (!$registros) {
            foreach($anios as $anio) {
                $plan->where('id', $anio->id_plan)->get();
                if ($anio->anio_absoluto == 1){
                    if ($anio->id_plan_estudio == 1){
                        // PRIMERO TURNO MAÑANA
                        $turno_id = 1;
                        $turno->where('id', $turno_id)->get();
                        $pi = new Propuesta_Institucional();
                        $pi->id_plan_estudio = $anio->id_plan_estudio;
                        $pi->id_anio = $anio->id;
                        $pi->id_turno_inicio = $turno_id;
                        $pi->id_turno_fin = $turno_id;
                        $pi->id_jornada = 1;
                        $pi->id_ciclo_lectivo = 1;
                        $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                        $pi->save();
                        // PRIMERO TURNO TARDE
                        $turno_id = 2;
                        $turno->where('id', $turno_id)->get();
                        $pi = new Propuesta_Institucional();
                        $pi->id_plan_estudio = $anio->id_plan_estudio;
                        $pi->id_anio = $anio->id;
                        $pi->id_turno_inicio = $turno_id;
                        $pi->id_turno_fin = $turno_id;
                        $pi->id_jornada = 1;
                        $pi->id_ciclo_lectivo = 1;
                        $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                        $pi->save();
                    } else {
                        // A.F. TURNO VESPERTINO
                        $turno_id = 4;
                        $turno->where('id', $turno_id)->get();
                        $pi = new Propuesta_Institucional();
                        $pi->id_plan_estudio = $anio->id_plan_estudio;
                        $pi->id_anio = $anio->id;
                        $pi->id_turno_inicio = $turno_id;
                        $pi->id_turno_fin = $turno_id;
                        $pi->id_jornada = 1;
                        $pi->id_ciclo_lectivo = 1;
                        $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                        $pi->save();
                    }
                }
                if ($anio->anio_absoluto >= 1 and $anio->anio_absoluto <= 6){
                    // SEGUNDO, TERCERO, CUARTO, QUINTO, SEXTO TURNO MAÑANA
                    $turno_id = 1;
                    $turno->where('id', $turno_id)->get();
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                    $pi->save();
                    // SEGUNDO, TERCERO, CUARTO, QUINTO, SEXTO TURNO TARDE
                    $turno_id = 2;
                    $turno->where('id', $turno_id)->get();
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                    $pi->save();
                    // CUARTO, QUINTO, SEXTO TURNO VESPERTINO
                    if ($anio->anio_absoluto >= 4 and $anio->anio_absoluto <= 6) {
                        $turno_id = 4;
                        $turno->where('id', $turno_id)->get();
                        $pi = new Propuesta_Institucional();
                        $pi->id_plan_estudio = $anio->id_plan_estudio;
                        $pi->id_anio = $anio->id;
                        $pi->id_turno_inicio = $turno_id;
                        $pi->id_turno_fin = $turno_id;
                        $pi->id_jornada = 1;
                        $pi->id_ciclo_lectivo = 1;
                        $pi->nombre = $anio->nombre_completo . " " . $turno->nombre . " " . $plan->nombre;
                        $pi->save();
                    }
                }

            }
        }

    }
}
