<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;

class EditController extends Controller
{

    public function __invoke(Review $review)
    {
        $types = Review::getTypes();
        return view ('admin.reviews.edit', compact('review','types'));
    }
}
