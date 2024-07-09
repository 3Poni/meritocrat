<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\Tag;

class ProjectsController extends Controller
{
    public function __invoke(Project $project)
    {
        $data = $project::with('service');
        $projects = $data->filter(request(['service_id']))->paginate(6);
        $services = $data->getRelation('service')->get();
        return view ('projects', compact('projects', 'services'));
    }
}
