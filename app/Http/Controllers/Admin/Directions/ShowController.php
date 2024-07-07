<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\Models\Service;

class ShowController extends Controller
{
    public function __invoke(Direction $direction)
    {
        $service = Service::all()[$direction->service_id];
        return view ('admin.directions.show', compact('direction', 'service'));
    }
}
