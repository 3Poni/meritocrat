<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __invoke(Request $request)
    {
        $services = Service::all();
        return view ('admin.projects.create', compact('services'));
    }
}
