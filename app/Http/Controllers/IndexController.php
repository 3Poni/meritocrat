<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;

class IndexController extends Controller
{
    public function __invoke(Service $service, Partner $partner, Review $review)
    {
        $services = $service::with('directions')->get();
        $partners = $partner::all()->where('slider_img', '!=', '');
        $reviews = $review::all();
        return view ('index', compact('services','partners','reviews'));
    }
}
