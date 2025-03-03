<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::factory()->create([
            'nombre' => 'Francisco',
            'email' => 'test@example.com',
            'apellidos' => 'Jimenez Lopez',
            'password' => Hash::make('password'),
            'perfil' => true,
            'idDep' => 1,
        ]);
    }
}
