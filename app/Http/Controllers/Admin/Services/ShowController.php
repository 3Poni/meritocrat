<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ShowController extends Controller
{

    public function __invoke(Service $service)
    {
        return view ('admin.services.show', compact('service'));
    }
}
