<?php

namespace App\Imports;

use App\Models\Kuliah;
use App\Models\Biodata;
use App\Models\DataOrangTua;
use App\Models\Pekerjaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportLulusan implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        $data = [
            'biodata' => new Biodata([
                'nisn' => (string)$row['nisn'],
                'nis' => $row['nis'],
                'nama' => $row['nama'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'tempat_lahir' => $row['tempat_lahir'],
                'tanggal_lahir' => date("Y-m-d", strtotime($row['tanggal_lahir'])),
                'kelas' => $row['kelas'],
                'tahun_lulus' => $row['tahun_lulus'],
                'status_lulusan' => $row['status_lulusan'],
                'alamat' => $row['alamat'],
            ]),
            'dataorangtua' => new DataOrangTua([
                'nisn_orang_tua' => (string)$row['nisn'],
                'nama_ayah' => $row['nama_ayah'],
                'tempat_lahir_ayah' => $row['tempat_lahir_ayah'],
                'tanggal_lahir_ayah' => date("Y-m-d", strtotime($row['tanggal_lahir_ayah'])),
                'pendidikan_ayah' => $row['pendidikan_ayah'],
                'pekerjaan_ayah' => $row['pekerjaan_ayah'],
                'penghasilan_ayah' => $row['penghasilan_ayah'],
                'alamat_ayah' => $row['alamat_ayah'],
                'nama_ibu' => $row['nama_ibu'],
                'tempat_lahir_ibu' => $row['tempat_lahir_ibu'],
                'tanggal_lahir_ibu' => date("Y-m-d", strtotime($row['tanggal_lahir_ibu'])),
                'pendidikan_ibu' => $row['pendidikan_ibu'],
                'pekerjaan_ibu' => $row['pekerjaan_ibu'],
                'penghasilan_ibu' => $row['penghasilan_ibu'],
                'alamat_ibu' => $row['alamat_ibu'],
            ]),
            'kuliah' => new Kuliah([
                'nisn_kuliah' => (string)$row['nisn'],
                'kampus' => $row['nama_kampus'],
                'fakultas' => $row['fakultas'],
                'jurusan' => $row['jurusan'],
                'alamat' => $row['alamat'],
            ]),
            'pekerjaan' => new Pekerjaan([
                'nisn_pekerjaan' => (string)$row['nisn'],
                'nama_perusahaan' => $row['nama_perusahaan'],
                'industri' => $row['industri'],
                'divisi' => $row['divisi'],
                'jabatan' => $row['jabatan'],
                'alamat_perusahaan' => $row['alamat_perusahaan'],
            ])
        ];

        return $data;
    }
}
