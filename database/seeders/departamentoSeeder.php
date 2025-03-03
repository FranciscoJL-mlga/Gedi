<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::create( [
            ['nombre' => 'Departamento de Informática',2],
            ['nombre' => 'Departamento de Electrónica',1],
            ['nombre' => 'Departamento de Lengua y Literatura',3],
            ['nombre' => 'Departamento de Salud',5],
            ['nombre' => 'Departamento de Geografía e Historia',4],
            ['nombre' => 'Departamento de Educación Física',5],
            ['nombre' => 'Departamento de Publicidad',6],
            ['nombre' => 'Departamento de Calidad',7],
        ]);

   
        
    }
}
