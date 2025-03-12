<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamento_edificio extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        
        $datos=( [
            ['idDep' => 1,'idEdi'=>2,'despachos'=>20],
            ['idDep' =>2,'idEdi'=>4,'despachos'=>20],
            ['idDep' => 1,'idEdi'=>4,'despachos'=>20],
            ['idDep' => 3,'idEdi'=>1,'despachos'=>20],
            ['idDep' => 2,'idEdi'=>1,'despachos'=>20],
            ['idDep' => 4,'idEdi'=>2,'despachos'=>20],
            ['idDep' => 2,'idEdi'=>3,'despachos'=>20],
            ['idDep' => 5,'idEdi'=>4,'despachos'=>20],
        ]);

        
        DB::table('departamento_edificio')->insert($datos);

        
    }
}
