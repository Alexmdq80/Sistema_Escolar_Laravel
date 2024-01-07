<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Documento_Tipo;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

/*         \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'myPassword'
         ]);  
 */
        $this->call(AmbitoSeeder::class); 

        $this->call(Plan_EstudioSeeder::class);
        
        $this->call(AnioSeeder::class);

        $this->call(TurnoSeeder::class);

        $this->call(JornadaSeeder::class);

        $this->call(Propuesta_InstitucionalSeeder::class);

        $this->call(Seccion_TipoSeeder::class);
        
        $this->call(Espacio_AcademicoSeeder::class);

        $this->call(DependenciaSeeder::class);

        $this->call(SectorSeeder::class);

        $this->call(Escuela_PISeeder::class);

        $this->call(NivelSeeder::class);

        $this->call(ModalidadSeeder::class);

        $this->call(CondicionSeeder::class);

        $this->call(Documento_TipoSeeder::class);

        $this->call(Documento_SituacionSeeder::class);

        $this->call(GeneroSeeder::class);

        $this->call(SexoSeeder::class);

        $this->call(PersonaSeeder::class);

        $this->call(UsuarioSeeder::class);
        // \App\Models\User::factory(10)->create();



 

    }
}
