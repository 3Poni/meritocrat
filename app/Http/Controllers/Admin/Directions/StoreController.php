<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Requests\Admin\Direction\StoreRequest;
use Illuminate\Http\Request;


class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.direction.index');
    }
}
