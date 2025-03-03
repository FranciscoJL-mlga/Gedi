<?php

namespace Database\Seeders;

use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        # invocamos las factorías a través de cada modelo
        \App\Models\Departamento::factory(15)->create() ;
        $this->call([ UsuarioSeeder::class, ]) ;
        \App\Models\Usuario::factory(10)->create() ;
        \App\Models\Edificio::factory(20)->create() ;

        # realizamos asociaciones entre tareas y etiquetas
        $this->call([ departamento_edificio::class ]) ;
      
    }
}
