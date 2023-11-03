<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enlace>
 */
class EnlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pagina' => random_int(1,10),
            'id_rol' => random_int(1,10),
            'descripcion' => fake()->text(50),
            'usuario_creacion' => fake()->userName(),
            'usuario_modificacion' => fake()->userName(),
        ];
    }
}
