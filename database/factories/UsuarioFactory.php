<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_persona' => random_int(1,10),
            'usuario' => fake()->userName(),
            'clave' => fake()->password(),
            'habilitado' => fake()->boolean(),
            'fecha' => fake()->date(),
            'id_rol' => random_int(1,10),
            'usuario_creacion' => fake()->userName(),
            'usuario_modificacion' => fake()->userName(),
        ];
    }
}
