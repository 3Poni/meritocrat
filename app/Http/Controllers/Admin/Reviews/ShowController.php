<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;

class ShowController extends Controller
{

    public function __invoke(Review $review)
    {
        $types = Review::getTypes();
        return view ('admin.reviews.show', compact('review', 'types'));
    }
}
