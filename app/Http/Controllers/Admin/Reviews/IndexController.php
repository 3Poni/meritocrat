<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $reviews = Review::all();
        $types = Review::getTypes();
        return view ('admin.reviews.index', compact('reviews', 'types'));
    }
}
