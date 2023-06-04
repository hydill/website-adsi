<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'username' => 'fadil',
            'password' => Hash::make('123')
        ]);
        DB::table('user')->insert([
            'username' => 'kamu',
            'password' => Hash::make('123')
        ]);
    }
}
