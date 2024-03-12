<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $persona = new Persona();
        
        $existe = $persona->where('documento_numero', 32126643)
                          ->where('id_documento_tipo', 1) 
                          ->count();
        if (!$existe) {
            $persona->id_documento_tipo = 1;
            $persona->id_documento_situacion = 1;
            $persona->id_sexo = 1;
            $persona->id_genero = 2;
            $persona->nacionalidad_id_pais = 158;
            $persona->nacimiento_lugar_id_pais = 165;
            $persona->documento_numero = 32126643;
            $persona->apellido = 'ACTIS LOBOS';
            $persona->nombre = 'ALEX JAVIER';
            $persona->vive_si = true;
            $persona->cuil_prefijo = 20;
            $persona->cuil_sufijo = 7;
            $persona->nacimiento_fecha = Carbon::parse('1980-05-21');

            $persona->save();
        }

        // Persona::factory(100)->create();
            //
    }
}
