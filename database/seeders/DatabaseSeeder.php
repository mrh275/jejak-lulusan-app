<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'username'  => 'administrator',
            'password'  => Hash::make('smanesta'),
            'name'      => 'Administrator',
            'email'     => 'admin@admin.com',
            'is_admin'  => true,
        ]);

        User::create([
            'username'  => 'operator',
            'password'  => Hash::make('operator'),
            'name'      => 'Operator',
            'email'     => 'operator@operator.com',
            'is_admin'  => false,
        ]);
    }
}
