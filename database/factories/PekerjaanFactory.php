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
