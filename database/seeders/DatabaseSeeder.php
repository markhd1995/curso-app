<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
//:::::::::::::::::::::::CREAR DATOS POR UNIDAD::::::::::::::::::::::::
\App\Models\categoria::factory()->create([
    'name' => 'Deportes',
    'descripcion' => 'todo lo que fultbol, basquet, boley, natacion etc.',
    'active' => true
]);

\App\Models\categoria::factory()->create([
   'name' => 'Accion',
   'descripcion' => 'todo lo que son juegos de guerra y peleas etc.',
   'active' => true
]);

\App\Models\categoria::factory()->create([
   'name' => 'Aventuras',
   'descripcion' => 'todo lo que son juegos de aventura',
   'active' => true
]);

    //:::::::::::::::::::CREAR GRANDES CANTIDADES DE DATOS:::::::::::::::::::::::
        \App\Models\Videogame::factory(100)->create();


         

        
    }
}
