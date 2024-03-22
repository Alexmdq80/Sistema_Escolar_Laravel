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
        $planes = new Plan_Estudio();
        $turnos = new Turno();
        // echo "$turnos";

        if (!$registros) {
            foreach($anios as $anio) {
                $plan = new Plan_Estudio();
                // echo "ªª $anio->id_plan_estudio ªª";
                $plan = $planes->where('id', $anio->id_plan_estudio)->get();
                $nombre_plan = strtoupper($plan[0]->nombre);
                // echo "** Plan $plan[0] ** ";
                if ($anio->anio_absoluto == 1 and $anio->id_plan_estudio == 2){
                    // A.F. TURNO VESPERTINO
                    $turno_id = 4;
                    $turno = $turnos->where('id', $turno_id)->get();
                    // echo "-- $turno -- ";
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno[0]->nombre . " " . $nombre_plan;
                    $pi->save();
                }
                if ($anio->anio_absoluto >= 1 and $anio->anio_absoluto <= 6
                    and $anio->id_plan_estudio <> 2
                    and $anio->id_plan_estudio <> 6){
                    // PRIMERO, SEGUNDO, TERCERO, CUARTO, QUINTO, SEXTO TURNO MAÑANA
                    $turno_id = 1;
                    $turno = new Turno();
                    $turno = $turnos->where('id', $turno_id)->get();
                    // echo "-- Turno: $turno [0] -- ";
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno[0]->nombre . " " . $nombre_plan;
                    $pi->save();

                    // PRIMERO, SEGUNDO, TERCERO, CUARTO, QUINTO, SEXTO TURNO TARDE
                    $turno_id = 2;
                    $turno = $turnos->where('id', $turno_id)->get();
                    // echo "-- $turno -- ";
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno[0]->nombre . " " . $nombre_plan;
                    $pi->save();
                }
                // CUARTO, QUINTO, SEXTO TURNO VESPERTINO TURISMO
                if ($anio->anio_absoluto >= 4 and $anio->anio_absoluto <= 6 and $anio->id_plan_estudio == 6) {
                    $turno_id = 4;
                    $turno = $turnos->where('id', $turno_id)->get();
                    // echo "-- $turno -- ";
                    $pi = new Propuesta_Institucional();
                    $pi->id_plan_estudio = $anio->id_plan_estudio;
                    $pi->id_anio = $anio->id;
                    $pi->id_turno_inicio = $turno_id;
                    $pi->id_turno_fin = $turno_id;
                    $pi->id_jornada = 1;
                    $pi->id_ciclo_lectivo = 1;
                    $pi->nombre = $anio->nombre_completo . " " . $turno[0]->nombre . " " . $nombre_plan;
                    $pi->save();
                }
            }
        }

    }

}
