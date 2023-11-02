<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nis'=> fake()->bothify('#########'),
            'namsis' => fake()->name(),
            'tem_lahir' => fake()->city(),
            'tgl' => fake()->date('y-m-d'),
             'kelas' => fake()->randomElement(['X_IPA','X_IPS','XI_IPA','XI_IPS','XII_IPA','XII_IPS']),
             'jenkel' => fake()->randomElement(['Lelaki','Perempuan']),
             'alamat' => fake()->address()
        ];
    }
}
