<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Models\Vacancy;

class DeleteController extends BaseController
{

    public function __invoke(Vacancy $vacancy)
    {
         $vacancy->delete();
         return redirect()->route('admin.vacancy.index');
    }
}
