<?php

namespace Database\Seeders;

use App\Models\Anio;
use App\Models\Plan_Estudio;
use Illuminate\Database\Seeder;

class AnioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      //  $registros = DB::select('select * from anio;');
        $registros = Anio::count();
        $planes = Plan_Estudio::get();

        if (!$registros) {
            foreach ($planes as $plan){
                $duracion = $plan->duracion_anios;

                for ($x = 1; $x <= $duracion; $x++) {
                    // echo " **** $x ****";
                    if ($plan->id_plan_ciclo == 1) {
                        $anio_abs = $x;
                    } else {
                        $anio_abs = $x + 3;
                    }
                    // echo " //// $anio_abs ///// ";
                    if ($duracion == 1){
                        $nombre = "A.F";
                        $nombre_completo = "AULA DE FORTALECIMIENTO";
                    } else {
                        $nombre = $anio_abs;
                        switch($anio_abs){
                            case 1:
                                $nombre_completo ="PRIMERO";
                                break;
                            case 2:
                                $nombre_completo ="SEGUNDO";
                                break;
                            case 3:
                                $nombre_completo ="TERCERO";
                                break;
                            case 4:
                                $nombre_completo ="CUARTO";
                                break;
                            case 5:
                                $nombre_completo ="QUINTO";
                                break;
                            case 6:
                                $nombre_completo ="SEXTO";
                                break;
                            default:
                                $nombre_completo = "???";
                                break;
                        }
                    }
                    $anio = new Anio();
                    $anio->id_plan_estudio = $plan->id;
                    $anio->nombre = $nombre;
                    $anio->nombre_completo = $nombre_completo;
                    $anio->anio_absoluto = $anio_abs;
                    $anio->anio_relativo = $x;
                    $anio->save();
                }
            }

        }
    }
}
