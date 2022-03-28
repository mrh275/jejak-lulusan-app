<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dataNISN = [
            3043788305,
            3043788306,
            3043788307,
            3043788308,
            3043788309,
            3043788310,
            3043788311,
            3043788312,
            3043788313,
            3043788314,
            3043788315,
            3043788316,
            3043788317,
            3043788318,
            3043788319,
            3043788320,
            3043788321,
            3043788322,
            3043788323,
            3043788324,
            3043788325,
            3043788326,
            3043788327,
            3043788328,
            3043788329,
            3058737822,
            3058737823,
            3058737824,
            3058737825,
            3058737826,
            3058737827,
            3058737828,
            3058737829,
            3058737830,
            3058737831,
            3058737832,
            3058737833,
            3058737834,
            3058737835,
            3058737836,
            3058737837,
            3058737838,
            3058737839,
            3058737840,
            3058737841,
            3058737842,
            3058737843,
            3058737844,
            3058737845,
            3058737846,
        ];

        return [
            'nisn' => $this->faker->unique()->randomElement($dataNISN),
            'nis' => $this->faker->unique()->numberBetween(192010200, 192010299),
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'kelas' => $this->faker->randomElement(['12-ipa-1', '12-ipa-2', '12-ips-1', '12-ips-2']),
            'tahun_lulus' => $this->faker->numberBetween(2019, 2022),
            'status_lulusan' => $this->faker->numberBetween(1, 3),
            'alamat' => $this->faker->address,
        ];
    }
}
