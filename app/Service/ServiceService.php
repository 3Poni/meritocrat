<?php

namespace App\Service;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/service', $data['img']))[2];
            }
            Service::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $service)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])){
                $data['img'] = explode('/',Storage::disk('public')->put('/img/service', $data['img']))[2];
            }
            $service->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $service;
    }
}
