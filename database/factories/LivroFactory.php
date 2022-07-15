<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'autor' => $this->faker->name(),
            'titulo' => $this->faker->title(),
            'genero' => $this->faker->sentence(),
            'edicao' => $this->faker->numberBetween($int1 = 1, $int2 = 15),
            'editora' => $this->faker->sentence(),
            'numero_de_paginas' => $this->faker->randomNumber(),
            'user_id' => User::all()->random()->id
        ];
    }
}
