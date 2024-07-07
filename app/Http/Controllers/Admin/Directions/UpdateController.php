<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Requests\Admin\Direction\UpdateRequest;
use App\Models\Direction;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Direction $direction)
    {
            $data = $request->validated();
            $direction = $this->service->update($data, $direction);

            return view ('admin.directions.show', compact('direction'));
    }
}
