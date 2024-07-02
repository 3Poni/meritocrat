<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Models\Review;


class DeleteController extends BaseController
{

    public function __invoke(Review $review)
    {
         $review->delete();
         return redirect()->route('admin.Review.index');
    }
}
