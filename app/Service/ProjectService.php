<?php

namespace App\Service;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/project', $data['img']))[2];
            }
            Project::firstOrcreate($data);
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
            if (isset($data['img'])){
                $data['img'] = explode('/',Storage::disk('public')->put('/img/partner', $data['img']))[2];
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
