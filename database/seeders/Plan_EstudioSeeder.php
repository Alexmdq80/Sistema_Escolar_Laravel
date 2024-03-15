<?php

namespace Database\Seeders;

use App\Models\Plan_Estudio;
use Illuminate\Database\Seeder;

class Plan_EstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $registros = Plan_Estudio::count();

        if (!$registros) {

            $plan_estudio = new Plan_Estudio();

            $plan_estudio->id = 1;
            $plan_estudio->nombre = "Bachiller Ciclo Básico";
            $plan_estudio->titulo = '000- Sec. Estatal - Bachiller Ciclo Básico';
            $plan_estudio->resolucion = 'Resolución N° 302/12';
            $plan_estudio->orientacion = 'Ciclo Básico';
            $plan_estudio->save();

            $plan_estudio2 = new Plan_Estudio();

            $plan_estudio2->id = 2;
            $plan_estudio2->nombre = "Bachiller Ciclo Básico (Aulas de Aceleración)";
            $plan_estudio2->titulo = '000- Sec. Estatal - Bachiller Ciclo Básico (Aulas de Aceleración)';
            $plan_estudio2->resolucion = 'Resolución N° 302/12';
            $plan_estudio2->orientacion = 'Ciclo Básico';
            $plan_estudio2->save();


            $plan_estudio3 = new Plan_Estudio();

            $plan_estudio3->id = 3;
            $plan_estudio3->nombre = "Bachiller en Ciencias Sociales";
            $plan_estudio3->titulo = '001- Sec. Estatal - Bachiller en Ciencias Sociales';
            $plan_estudio3->resolucion = 'Resolución N° 302/12';
            $plan_estudio3->orientacion = 'Ciencias Sociales';
            $plan_estudio3->save();


            $plan_estudio4 = new Plan_Estudio();

            $plan_estudio4->id = 4;
            $plan_estudio4->nombre = "Bachiller en Ciencias Naturales";
            $plan_estudio4->titulo = '002- Sec. Estatal - Bachiller en Ciencias Naturales';
            $plan_estudio4->resolucion = 'Resolución N° 302/12';
            $plan_estudio4->orientacion = 'Ciencias Naturales';
            $plan_estudio4->save();

            $plan_estudio5 = new Plan_Estudio();

            $plan_estudio5->id = 5;
            $plan_estudio5->nombre = "Bachiller en Economía y Administración";
            $plan_estudio5->titulo = '003- Sec. Estatal - Bachiller en Economía y Administración';
            $plan_estudio5->resolucion = 'Resolución N° 302/12';
            $plan_estudio5->orientacion = 'Economía y Administración';
            $plan_estudio5->save();

            $plan_estudio6 = new Plan_Estudio();

            $plan_estudio6->id = 6;
            $plan_estudio6->nombre = "Bachiller en Turismo";
            $plan_estudio6->titulo = '172- Sec. Estatal - Bachiller en Turismo';
            $plan_estudio6->resolucion = 'RESOLUCIÓN N°302/12- RESOLUCIÓN N°3124/19';
            $plan_estudio6->orientacion = 'Turismo';
            $plan_estudio6->save();
        }
        //
    }
}
