<?php

namespace Database\Factories;

use App\Models\Departamento;  // Asegúrate de importar el modelo
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departamento>
 */
class DepartamentoFactory extends Factory
{
    // Referencia al modelo que usa esta factory
    protected $model = Departamento::class;

    /**
     * Define el estado predeterminado del modelo.
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),       // Correcto
          
        ];
    }
}