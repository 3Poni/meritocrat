<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;

class EditController extends Controller
{

    public function __invoke(Project $project)
    {
        $services = Service::all();
        return view ('admin.projects.edit', compact('project', 'services'));
    }
}
