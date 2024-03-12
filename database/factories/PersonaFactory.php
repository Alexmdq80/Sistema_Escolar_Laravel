<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
  
    protected $model = Persona:Class;
  
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            'apellido' => $this->faker->sentence(),
            'id_documento_tipo' => $this->pluck('id')->all(),
            'id_documento_situacion' => $this->pluck('id')->all(),
            'id_sexo' => $this->pluck('id')->all(),
            'id_genero' => $this->pluck('id')->all(),
            'nacionalidad_id_pais' => $this->pluck('id')->all(), 
            'nacimiento_lugar_id_pais' => $this->pluck('id')->all(),
            'nacimiento_lugar_id_provincia' => $this->pluck('id')->all(),
            'nacimiento_lugar_id_departamento' => $this->pluck('id')->all()
            'nacimiento_lugar_id_localidad_asentamiento' => $this->pluck('id')->all(), 
            'documento_numero', 
            'tramite',
            'posee_cpi_si' => $this->faker->randomElement([0,1]), 
            'posee_docExt_si' => $this->faker->randomElement([0,1]),
            'vive_si' => $this->faker->randomElement([0,1]), 
            'CUIL_prefijo' => $this->faker->randomElement([20,23,24,27]),
            'CUIL_sufijo' => $this->faker->randomElement([0,1,2,3,4,5,6,7,8,9]),
            'nacimiento_fecha'
        ];
    }
}
