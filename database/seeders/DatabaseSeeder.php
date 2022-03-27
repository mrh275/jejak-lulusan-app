<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kuliah;
use App\Models\Biodata;
use App\Models\Angkatan;
use App\Models\Pekerjaan;
use App\Models\DataOrangTua;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // \App\Models\User::factory(10)->create();
        // User::create([
        //     'username'  => 'administrator',
        //     'password'  => Hash::make('smanesta'),
        //     'name'      => 'Administrator',
        //     'email'     => 'admin@admin.com',
        //     'is_admin'  => true,
        // ]);

        // User::create([
        //     'username'  => 'operator',
        //     'password'  => Hash::make('operator'),
        //     'name'      => 'Operator',
        //     'email'     => 'operator@operator.com',
        //     'is_admin'  => false,
        // ]);

        // Biodata::factory(50)->create();
        // Kuliah::factory(38)->create();
        // Pekerjaan::factory(33)->create();
        DataOrangTua::factory(50)->create();

        // Angkatan::factory(4)->create();
        // Kelas::factory(5)->create();
    }
}
