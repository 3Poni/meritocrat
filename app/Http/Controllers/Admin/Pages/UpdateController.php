<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Requests\Admin\CustomPage\UpdateRequest;
use App\Models\CustomPage;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, CustomPage $page)
    {
            $data = $request->validated();
            $page = $this->service->update($data, $page);

            return view ('admin.pages.show', compact('page'));
    }
}
