<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;

class EditController extends Controller
{

    public function __invoke(Service $service)
    {
         return view ('admin.services.edit', compact('service'));
    }
}
