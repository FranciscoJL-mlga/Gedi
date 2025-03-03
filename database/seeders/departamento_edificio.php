<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departamento_edificio extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::create( [
            [1,2,99],
            [2,2,12],
            [2,1,12],
            [3,2,15],
            [3,1,13],
            [1,3,21],
           
        ]);

   
        
    }
}
