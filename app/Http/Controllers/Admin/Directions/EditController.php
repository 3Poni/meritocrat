<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\Models\Service;

class EditController extends Controller
{

    public function __invoke(Direction $direction)
    {
        $services = Service::all();
        return view ('admin.directions.edit', compact('direction', 'services'));
    }
}
