<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $directions = Direction::all();
        $services = Service::all();
        return view ('admin.directions.index', compact('directions', 'services'));
    }
}
