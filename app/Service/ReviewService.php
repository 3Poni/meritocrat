<?php

namespace App\Service;

use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReviewService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/review', $data['img']))[2];
            }
            Review::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $review)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])){
                $data['img'] = explode('/',Storage::disk('public')->put('/img/review', $data['img']))[2];
            }
            $review->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $review;
    }
}
