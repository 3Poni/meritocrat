<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;

class ShowController extends Controller
{

    public function __invoke(Vacancy $vacancy)
    {
        return view ('admin.vacancies.show', compact('vacancy'));
    }
}
