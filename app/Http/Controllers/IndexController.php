<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function __invoke(Service $service, Partner $partner, Review $review)
    {
        $services = $service::with('directions')->get();
        $partners = $partner::all()->where('slider_img', '!=', '');
        $reviews = $review::all();
        $popup = !empty(Session::get('popup')) ? Session::get('popup') : null;
        return view ('index', compact('services','partners','reviews', 'popup'));
    }
}
