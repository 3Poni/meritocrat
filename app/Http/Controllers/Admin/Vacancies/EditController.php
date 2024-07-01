<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;

class EditController extends Controller
{

    public function __invoke(Vacancy $vacancy)
    {
         return view ('admin.vacancies.edit', compact('vacancy'));
    }
}
