<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=( [
            ['nombre' => 'Departamento de Informática'],
            ['nombre' => 'Departamento de Electrónica'],
            ['nombre' => 'Departamento de Lengua y Literatura'],
            ['nombre' => 'Departamento de Salud'],
            ['nombre' => 'Departamento de Geografía e Historia'],
            ['nombre' => 'Departamento de Educación Física'],
            ['nombre' => 'Departamento de Publicidad'],
            ['nombre' => 'Departamento de Calidad'],
        ]);

        DB::table('departamento')->insert($datos);
        
    }
}
