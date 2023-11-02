<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
               'nip'=> fake()->bothify('#########'),
               'nama_lengkap' => fake()->name(),
               'email' => fake()->unique()->safeEmail(),
               'tem_lahir' => fake()->city(),
               'tgl' => fake()->date('y-m-d'),
               'jabatan' => fake()->jobTitle(),
             'jenkel' => fake()->randomElement(['Lelaki','Perempuan']),
             'tlpn' => fake()->randomNumber(9),
                'alamat' => fake()->address()
            ];
    }
}
