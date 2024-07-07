<?php

namespace App\Service;

use App\Models\Direction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DirectionService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['result'] = serialize(['result']);
            Direction::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $direction)
    {
        try {
            DB::beginTransaction();
            $direction->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $direction;
    }
}
