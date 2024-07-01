<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Requests\Admin\Vacancy\StoreRequest;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.vacancy.index');
    }
}
