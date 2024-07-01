<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Requests\Admin\Service\StoreRequest;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.service.index');
    }
}
