<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PekerjaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dataNISN = [
            3058737842,
            3043788325,
            3058737832,
            3058737834,
            3058737840,
            3058737837,
            3043788308,
            3043788311,
            3043788324,
            3058737828,
            3058737841,
            3043788321,
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

        $dataIndustri = [
            'Teksil',
            'Otomotif',
            'Manufaktur',
            'Food and Beverage',
            'Healthcare',
            "Chemical",
            "Pendidiakan",
            'Pertanian',
            'Pertambangan',
        ];

        $dataDivisi = [
            'HRD',
            'Marketing',
            'Finance',
            'IT',
            'Produksi',
            'Maintenance',
            'Purchasing',
        ];

        $dataJabatan = [
            'Manager',
            'Supervisor',
            'Staff',
            'Operator',
            'Pengawas',
            "QC",
        ];

        return [
            'nisn_pekerjaan' => $this->faker->unique()->randomElement($dataNISN),
            'nama_perusahaan' => $this->faker->company,
            'industri' => $this->faker->randomElement($dataIndustri),
            'divisi' => $this->faker->randomElement($dataDivisi),
            'jabatan' => $this->faker->randomElement($dataJabatan),
            'alamat_perusahaan' => $this->faker->address,
        ];
    }
}
