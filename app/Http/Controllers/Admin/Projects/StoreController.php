<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Requests\Admin\Project\StoreRequest;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.project.index');
    }
}
