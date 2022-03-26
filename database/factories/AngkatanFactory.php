<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AngkatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_lulus' => $this->faker->unique()->numberBetween(2019, 2022),
        ];
    }
}
