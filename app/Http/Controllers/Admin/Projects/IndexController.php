<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $projects = project::all();
        $services = Service::all();
        return view ('admin.projects.index', compact('projects', 'services'));
    }
}
