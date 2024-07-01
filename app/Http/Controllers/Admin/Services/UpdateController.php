<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Requests\Admin\Service\UpdateRequest;
use App\Models\Service;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Service $service)
    {
            $data = $request->validated();
            $service = $this->service->update($data, $service);

            return view ('admin.services.show', compact('service'));
    }
}
