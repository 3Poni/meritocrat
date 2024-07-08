<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServicesController extends Controller
{
    public function __invoke(Service $service)
    {
        $services = $service::all();
        return view ('services', compact('services'));
    }
}
