<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;

class ShowController extends Controller
{
    public function __invoke(Project $project)
    {
        $service = Service::all()[$project->service_id];
        return view ('admin.projects.show', compact('project', 'service'));
    }
}
