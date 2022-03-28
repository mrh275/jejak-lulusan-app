<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_lulus' => 2022,
            'kelas' => $this->faker->unique()->randomElement(['12-ipa-1', '12-ipa-2', '12-ips-1', '12-ips-2']),
        ];
    }
}
