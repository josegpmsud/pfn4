<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'usuario_creacion' => fake()->userName(),
            'usuario_modificacion' => fake()->userName(),
            'url' => fake()->url(),
            'estado' => fake()->randomElement(['a', 'i']),
            'nombre' => fake()->userName(),
            'descripcion' => fake()->text(20),
            'icono' => fake()->url(),
            'tipo' => fake()->text(10),
        ];
    }
}
