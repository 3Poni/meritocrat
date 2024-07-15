<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
    public function __invoke(Project $project, Request $request)
    {
//        return response()->json([$project::with('service')->filter(request(['service_id']))->paginate(6)]);
        return response()->json(['result' => $project::with('service')->filter(request(['service_id']))->paginate(6)->appends(request(['service_id']))], 200);
    }
}
