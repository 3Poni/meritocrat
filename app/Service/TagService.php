<?php

namespace App\Service;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            Tag::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $tag)
    {
        try {
            DB::beginTransaction();
            $tag->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $tag;
    }
}
