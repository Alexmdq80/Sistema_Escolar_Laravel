<?php

namespace Database\Seeders;

use App\Models\Anio;

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

        if (!$registros) {

            // Ciclo Básico
            $anio = new Anio();

            $anio->id = 1;
            $anio->id_plan_estudio = 1;
            $anio->anio ="1";
            $anio->nombre ="PRIMERO";

            $anio->save();

            $anio2 = new Anio();

            $anio2->id = 2;
            $anio2->id_plan_estudio = 1;
            $anio2->anio ="2";
            $anio2->nombre ="SEGUNDO";

            $anio2->save();

            $anio3 = new Anio();

            $anio3->id = 3;
            $anio3->id_plan_estudio = 1;
            $anio3->anio ="3";
            $anio3->nombre ="TERCERO";

            $anio3->save();

            $anio4 = new Anio();

            $anio4->id = 4;
            $anio4->id_plan_estudio = 2;
            $anio4->anio ="AF";
            $anio4->nombre ="AULA FORTALECIMIENTO";

            $anio4->save();

            // Ciencias Sociales //
            $anio5 = new Anio();

            $anio5->id = 5;
            $anio5->id_plan_estudio = 3;
            $anio5->anio ="4";
            $anio5->nombre ="CUARTO";

            $anio5->save();

            $anio6 = new Anio();

            $anio6->id = 6;
            $anio6->id_plan_estudio = 3;
            $anio6->anio ="5";
            $anio6->nombre ="QUINTO";

            $anio6->save();

            $anio7 = new Anio();

            $anio7->id = 7;
            $anio7->id_plan_estudio = 3;
            $anio7->anio ="6";
            $anio7->nombre ="SEXTO";

            $anio7->save();

            // Ciencias Naturales  //
            $anio8 = new Anio();

            $anio8->id = 8;
            $anio8->id_plan_estudio = 4;
            $anio8->anio ="4";
            $anio8->nombre ="CUARTO";

            $anio8->save();

            $anio9 = new Anio();

            $anio9->id = 9;
            $anio9->id_plan_estudio = 4;
            $anio9->anio ="5";
            $anio9->nombre ="QUINTO";

            $anio9->save();

            $anio10 = new Anio();

            $anio10->id = 10;
            $anio10->id_plan_estudio = 4;
            $anio10->anio ="6";
            $anio10->nombre ="SEXTO";

            $anio10->save();

            // Economía y Administración  //
            $anio11 = new Anio();

            $anio11->id = 11;
            $anio11->id_plan_estudio = 5;
            $anio11->anio ="4";
            $anio11->nombre ="CUARTO";

            $anio11->save();

            $anio12 = new Anio();

            $anio12->id = 12;
            $anio12->id_plan_estudio = 5;
            $anio12->anio ="5";
            $anio12->nombre ="QUINTO";

            $anio12->save();

            $anio13 = new Anio();

            $anio13->id = 13;
            $anio13->id_plan_estudio = 5;
            $anio13->anio ="6";
            $anio13->nombre ="SEXTO";

            $anio13->save();

            // Turismo //
            $anio14 = new Anio();

            $anio14->id = 14;
            $anio14->id_plan_estudio = 6;
            $anio14->anio ="4";
            $anio14->nombre ="CUARTO";

            $anio14->save();

            $anio15 = new Anio();

            $anio15->id = 15;
            $anio15->id_plan_estudio = 6;
            $anio15->anio ="5";
            $anio15->nombre ="QUINTO";

            $anio15->save();

            $anio16 = new Anio();

            $anio16->id = 16;
            $anio16->id_plan_estudio = 6;
            $anio16->anio ="6";
            $anio16->nombre ="SEXTO";

            $anio16->save();
        }
        //
    }
}
