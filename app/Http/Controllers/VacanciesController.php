<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;

class VacanciesController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $vacancies = $vacancy::all();
        return view ('vacancies', compact('vacancies'));
    }
}
