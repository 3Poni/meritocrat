<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Review;
use App\Models\Service;

class AboutController extends Controller
{
    public function __invoke(Review $review, Service $service, Project $project)
    {
        $services = $service::with('directions')->get();
        $projects = $project->filter(request(['service_id']))->limit(6)->get();
        $reviews = $review::all();
        return view ('about', compact('projects','reviews', 'services'));
    }
}
