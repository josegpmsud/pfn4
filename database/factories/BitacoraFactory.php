<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bitacora>
 */
class BitacoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bitacora' => fake()->firstName(),
            'id_usuario' => random_int(1,10),
            'fecha' => fake()->date(),
            'hora' => fake()->time(),
            'ip' => fake()->ipv4(),
            'so' => fake()->text(20),
            'navegador' => fake()->text(30),
            'usuario' => fake()->userName(),
        ];
    }
}
