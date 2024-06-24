<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'admin',
             'password' => Hash::make(12345678),
             'email' => 'admin@mail.ru',
             'role' => 1,
         ]);
    }
}
