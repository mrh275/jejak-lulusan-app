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
