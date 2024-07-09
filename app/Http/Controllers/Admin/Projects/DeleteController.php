<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;

class DeleteController extends Controller
{

    public function __invoke(Project $project)
    {
         $project->delete();
         return redirect()->route('admin.project.index');
    }
}
