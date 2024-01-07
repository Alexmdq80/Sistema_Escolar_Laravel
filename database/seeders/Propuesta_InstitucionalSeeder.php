<?php

namespace Database\Seeders;

use App\Models\Propuesta_Institucional;
use Illuminate\Database\Seeder;

class Propuesta_InstitucionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $registros = Propuesta_Institucional::count();

        if (!$registros) {
            // Ciclo Básico Turno Mañana
            $pi = new Propuesta_Institucional();

            $pi->id = 1;
            $pi->id_anio = 1;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
        

            $pi = new Propuesta_Institucional();

            $pi->id = 2;
            $pi->id_anio = 2;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 3;
            $pi->id_anio = 3;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Ciclo Básico Turno Tarde
            $pi = new Propuesta_Institucional();

            $pi->id = 4;
            $pi->id_anio = 1;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
        

            $pi = new Propuesta_Institucional();

            $pi->id = 5;
            $pi->id_anio = 2;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 6;
            $pi->id_anio = 3;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Aula de Fortalecimiento

            $pi = new Propuesta_Institucional();

            $pi->id = 7;
            $pi->id_anio = 4;
            $pi->id_turno_inicio = 3;
            $pi->id_turno_fin = 3;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
            
            // Cs Sociales 4to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 8;
            $pi->id_anio = 5;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 9;
            $pi->id_anio = 5;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
            
            // Cs Sociales 5to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 10;
            $pi->id_anio = 6;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 11;
            $pi->id_anio = 6;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Cs Sociales 6to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 12;
            $pi->id_anio = 7;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 13;
            $pi->id_anio = 7;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Cs Naturales 4to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 14;
            $pi->id_anio = 8;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 15;
            $pi->id_anio = 8;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
            
            // Cs Naturales 5to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 16;
            $pi->id_anio = 9;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 17;
            $pi->id_anio = 9;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Cs Naturales 6to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 18;
            $pi->id_anio = 10;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 19;
            $pi->id_anio = 10;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();     

            // Economía 4to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 20;
            $pi->id_anio = 11;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 21;
            $pi->id_anio = 11;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
            
            // Economía 5to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 22;
            $pi->id_anio = 12;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 23;
            $pi->id_anio = 12;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Economía 6to MAÑANA - TARDE
            $pi = new Propuesta_Institucional();

            $pi->id = 24;
            $pi->id_anio = 13;
            $pi->id_turno_inicio = 1;
            $pi->id_turno_fin = 1;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            $pi = new Propuesta_Institucional();

            $pi->id = 25;
            $pi->id_anio = 13;
            $pi->id_turno_inicio = 2;
            $pi->id_turno_fin = 2;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();   

            // Turismo 4to Noche
            $pi = new Propuesta_Institucional();

            $pi->id = 26;
            $pi->id_anio = 14;
            $pi->id_turno_inicio = 3;
            $pi->id_turno_fin = 3;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
            
            // Turismo 5to Noche
            $pi = new Propuesta_Institucional();

            $pi->id = 27;
            $pi->id_anio = 15;
            $pi->id_turno_inicio = 3;
            $pi->id_turno_fin = 3;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();

            // Turismo 6to Noche
            $pi = new Propuesta_Institucional();

            $pi->id = 28;
            $pi->id_anio = 16;
            $pi->id_turno_inicio = 3;
            $pi->id_turno_fin = 3;
            $pi->id_jornada = 1;
            $pi->ciclo_lectivo = 2023;

            $pi->save();
        }
        //
    }
}
