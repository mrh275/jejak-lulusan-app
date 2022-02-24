<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dataNISN = [
            3043788316,
            3058737838,
            3058737824,
            3043788329,
            3058737822,
            3043788318,
            3043788307,
            3058737836,
            3043788327,
            3058737825,
            3043788322,
            3058737831,
            3058737826,
            3043788328,
            3043788315,
            3043788306,
            3043788314,
            3058737823,
            3043788320,
            3043788309,
            3058737839,
            3043788317,
            3058737827,
            3043788312,
            3058737830,
            3058737844,
            3058737833,
            3058737835,
            3043788310,
            3058737843,
            3058737829,
            3043788313,
            3058737845,
            3043788305,
            3043788319,
            3043788323,
            3058737846,
            3043788326
        ];

        $dataKampus = [
            'Universitas Muhammadiyah Surakarta',
            'Universitas Gadjah Mada',
            'Universitas Negeri Jakarta',
            'Universitas Negeri Medan',
            'Universitas Negeri Yogyakarta',
            'Universitas Negeri Padang',
            'Universitas Negeri Semarang',
            'Universitas Singaperbangsa Karawang',
            'Universitas Negeri Malang',
        ];

        $dataFakultas = [
            'Fakultas Ilmu Terapan',
            'Fakultas Ilmu Komputer',
            'Fakultas Pendidikan dan Keguruan',
            'Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'Fakultas Teknik',
            'Fakultas Ekonomi dan Bisnis',
        ];

        $dataJurusan = [
            'Ilmu Komputer',
            'Teknik Informatika',
            'Sistem Informasi',
            'Pendingidikan Agama Islam',
            'Pendingidikan Bahasa Inggris',
            'Kimia',
            'Biologi',
            'Ekonomi',
            'Ekonomi Pembangunan',
        ];

        return [
            'nisn_kuliah' => $this->faker->unique()->randomElement($dataNISN),
            'kampus' => $this->faker->randomElement($dataKampus),
            'fakultas' => $this->faker->randomElement($dataFakultas),
            'jurusan' => $this->faker->randomElement($dataJurusan),
            'alamat' => $this->faker->address,
        ];
    }
}
