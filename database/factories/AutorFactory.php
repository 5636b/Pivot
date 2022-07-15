<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'genero' => $this->faker->sentence(),
            'livros_publicados' => $this->faker->numberBetween($int1 = 1, $int2 = 15),
            'mais_vendidos' => $this->faker->boolean()
        ];
    }
}
