<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Requests\Admin\Review\UpdateRequest;
use App\Models\Review;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Review $review)
    {
            $data = $request->validated();
            $review = $this->service->update($data, $review);

            return redirect()->route('admin.review.edit', $review->id);
    }
}
