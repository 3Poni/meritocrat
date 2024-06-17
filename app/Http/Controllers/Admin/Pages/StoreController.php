<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Requests\Admin\CustomPage\StoreRequest;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.page.index');
    }
}
