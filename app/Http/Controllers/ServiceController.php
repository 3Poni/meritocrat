<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function __invoke(Service $service, $url)
    {
        $service = $service::where('url', $url)->firstOrFail();
        return view ('service', compact('service'));
    }
}
