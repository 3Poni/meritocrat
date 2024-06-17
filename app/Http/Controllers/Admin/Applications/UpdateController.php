<?php

namespace App\Http\Controllers\Admin\Applications;

use App\Http\Requests\Admin\Application\UpdateRequest;
use App\Models\Application;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Application $application)
    {
            $data = $request->validated();
            $application = $this->service->update($data, $application);

            return view ('admin.applications.show', compact('application'));
    }
}
