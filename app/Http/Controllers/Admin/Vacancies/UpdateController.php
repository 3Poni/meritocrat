<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Requests\Admin\Vacancy\UpdateRequest;
use App\Models\Vacancy;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Vacancy $vacancy)
    {
            $data = $request->validated();
            $vacancy = $this->service->update($data, $vacancy);

            return view ('admin.vacancies.show', compact('vacancy'));
    }
}
