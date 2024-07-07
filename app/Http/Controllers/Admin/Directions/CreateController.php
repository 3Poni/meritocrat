<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __invoke(Request $request)
    {
        $services = Service::all();
        return view ('admin.directions.create', compact('services'));
    }
}
