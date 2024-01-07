<?php

namespace Database\Seeders;

use App\Models\Espacio_Academico;
use Illuminate\Database\Seeder;

class Espacio_AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $registros = Espacio_Academico::count();

        if (!$registros) {

            //1º 1º - 1º 2º - 1º 3º - 1º 4º 
            
            $ea = new Espacio_Academico();

            $ea->id = 1;
            $ea->id_propuesta_institucional = 1;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 2;
            $ea->id_propuesta_institucional = 1;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 3;
            $ea->id_propuesta_institucional = 4;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 4;
            $ea->id_propuesta_institucional = 4;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();

            //2º 1º - 2º 2º - 2º 3º - 2º 4º 

            $ea = new Espacio_Academico();

            $ea->id = 5;
            $ea->id_propuesta_institucional = 2;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 6;
            $ea->id_propuesta_institucional = 2;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 7;
            $ea->id_propuesta_institucional = 5;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 8;
            $ea->id_propuesta_institucional = 5;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();

            //3º 1º - 3º 5º - 3º 3º - 3º 4º 

            $ea = new Espacio_Academico();

            $ea->id = 9;
            $ea->id_propuesta_institucional = 3;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 10;
            $ea->id_propuesta_institucional = 3;
            $ea->id_seccion_tipo = 1;
            $ea->division = "5";
            $ea->nombre = "QUINTA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 11;
            $ea->id_propuesta_institucional = 6;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 12;
            $ea->id_propuesta_institucional = 6;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();
        
            // CS.SOCIALES - 4º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 13;
            $ea->id_propuesta_institucional = 8;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 14;
            $ea->id_propuesta_institucional = 9;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();

            // CS.SOCIALES - 5º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 15;
            $ea->id_propuesta_institucional = 10;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 16;
            $ea->id_propuesta_institucional = 11;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();


            // CS.SOCIALES - 6º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 17;
            $ea->id_propuesta_institucional = 12;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 18;
            $ea->id_propuesta_institucional = 13;
            $ea->id_seccion_tipo = 1;
            $ea->division = "4";
            $ea->nombre = "CUARTA";
            
            $ea->save();

            // CS.NATURALES - 4º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 19;
            $ea->id_propuesta_institucional = 14;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 20;
            $ea->id_propuesta_institucional = 15;
            $ea->id_seccion_tipo = 1;
            $ea->division = "6";
            $ea->nombre = "SEXTA";
            
            $ea->save();

            // CS.NATURALES - 5º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 21;
            $ea->id_propuesta_institucional = 16;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 22;
            $ea->id_propuesta_institucional = 17;
            $ea->id_seccion_tipo = 1;
            $ea->division = "6";
            $ea->nombre = "SEXTA";
            
            $ea->save();


            // CS.NATURALES - 6º MAÑANA - TARDE
    
            $ea = new Espacio_Academico();

            $ea->id = 23;
            $ea->id_propuesta_institucional = 18;
            $ea->id_seccion_tipo = 1;
            $ea->division = "3";
            $ea->nombre = "TERCERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 24;
            $ea->id_propuesta_institucional = 19;
            $ea->id_seccion_tipo = 1;
            $ea->division = "6";
            $ea->nombre = "SEXTA";
            
            $ea->save();

            // ECONOMÍA - 4º MAÑANA - TARDE
                
            $ea = new Espacio_Academico();

            $ea->id = 25;
            $ea->id_propuesta_institucional = 20;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 26;
            $ea->id_propuesta_institucional = 21;
            $ea->id_seccion_tipo = 1;
            $ea->division = "5";
            $ea->nombre = "QUINTA";
            
            $ea->save();

            // ECONOMÍA- 5º MAÑANA - TARDE

            $ea = new Espacio_Academico();

            $ea->id = 27;
            $ea->id_propuesta_institucional = 22;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 28;
            $ea->id_propuesta_institucional = 23;
            $ea->id_seccion_tipo = 1;
            $ea->division = "5";
            $ea->nombre = "QUINTA";
            
            $ea->save();


            // ECONOMÍA - 6º MAÑANA - TARDE

            $ea = new Espacio_Academico();

            $ea->id = 29;
            $ea->id_propuesta_institucional = 24;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 30;
            $ea->id_propuesta_institucional = 25;
            $ea->id_seccion_tipo = 1;
            $ea->division = "5";
            $ea->nombre = "QUINTA";
            
            $ea->save();
            
            // TURISMO - 4º - 5º - 6º NOCHE

            $ea = new Espacio_Academico();

            $ea->id = 31;
            $ea->id_propuesta_institucional = 26;
            $ea->id_seccion_tipo = 1;
            $ea->division = "8";
            $ea->nombre = "OCTAVA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 32;
            $ea->id_propuesta_institucional = 27;
            $ea->id_seccion_tipo = 1;
            $ea->division = "8";
            $ea->nombre = "OCTAVA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 33;
            $ea->id_propuesta_institucional = 28;
            $ea->id_seccion_tipo = 1;
            $ea->division = "8";
            $ea->nombre = "OCTAVA";
            
            $ea->save();

            // AULA FORTALECIMIENTO - 1º - 2º NOCHE

            $ea = new Espacio_Academico();

            $ea->id = 34;
            $ea->id_propuesta_institucional = 7;
            $ea->id_seccion_tipo = 1;
            $ea->division = "1";
            $ea->nombre = "PRIMERA";
            
            $ea->save();

            $ea = new Espacio_Academico();

            $ea->id = 35;
            $ea->id_propuesta_institucional = 7;
            $ea->id_seccion_tipo = 1;
            $ea->division = "2";
            $ea->nombre = "SEGUNDA";
            
            $ea->save();

        }

    }
}
