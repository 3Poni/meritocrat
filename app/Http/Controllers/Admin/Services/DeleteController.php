<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;


class DeleteController extends BaseController
{

    public function __invoke(Service $Service)
    {
         $Service->delete();
         return redirect()->route('admin.service.index');
    }
}
