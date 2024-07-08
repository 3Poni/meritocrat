<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;


class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacancy::factory()->count(13)->create();
    }
}
