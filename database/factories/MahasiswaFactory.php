<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim'           => $this->faker->unique()->numberBetween(2141720001,2141720999),
            'nama'          => $this->faker->name(),
            'tanggal_lahir' => $this->faker->dateTimeThisCentury()->format('d-m-Y'),
            'email'         => $this->faker->email(),
            'kelas'         => $this->faker->randomElement(['2A', '2B', '2C', '2D', '2E', '2F', '2G', '2H', '2I']),
            'jurusan'       => $this->faker->randomElement(['Teknologi Informasi','Teknik Mesin', 'Teknik Sipil']),
            'no_hp'         => $this->faker->phoneNumber()
        ];
    }
}
