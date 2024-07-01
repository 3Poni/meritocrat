<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Requests\Admin\Newsletter\StoreRequest;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->newsletter->store($data);

        return redirect()->route('admin.newsletter.index');
    }
}
