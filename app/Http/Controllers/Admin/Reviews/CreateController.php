<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Models\Review;
use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        $types = Review::getTypes();
        return view ('admin.reviews.create', compact('types'));
    }
}
