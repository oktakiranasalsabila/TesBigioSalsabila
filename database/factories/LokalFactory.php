<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lokal>
 */
class LokalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lokal' => fake()->randomElement(['X_IPA','X_IPS','XI_IPA','XI_IPS','XII_IPA','XII_IPS']),

        ];
    }
}
