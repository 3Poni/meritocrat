<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $vacancies = Vacancy::all();
        return view ('admin.vacancies.index', compact('vacancies'));
    }
}
