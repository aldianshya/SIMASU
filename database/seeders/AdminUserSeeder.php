<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password12345'), // ganti jika ingin password lain
            // 'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
