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
            if(!empty($data['result'])) {
                $data['result'] = serialize($data['result']);
            }
            if(!empty($data['result2'])) {
                $data['result2'] = serialize($data['result2']);
            }
            if(!empty($data['stages'])) {
                $data['stages'] = serialize($data['stages']);
            }
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
            if(!empty($data['result'])) {
                $data['result'] = serialize($data['result']);
            }
            if(!empty($data['result2'])) {
                $data['result2'] = serialize($data['result2']);
            }
            if(!empty($data['stages'])) {
                $data['stages'] = serialize($data['stages']);
            }
            $direction->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $direction;
    }
}
