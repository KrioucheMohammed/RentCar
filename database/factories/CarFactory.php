<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marque' => fake()->company(),
            'model' => fake()->year(),
            'type' => fake()->randomElement(["diesel","essence"]),
            'prixJ'=>fake()->numberBetween(100,500),
            'image'=>fake()->imageUrl(),
            'dispo' => fake()->numberBetween(0,1),
            'vitesse'=>fake()->randomElement(['automatique','manuelle']),

            
        ];
    }
}
