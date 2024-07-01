<?php

namespace App\Service;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/service', $data['img']))[1];
            }
            Application::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $page)
    {
        try {
            DB::beginTransaction();
            if (isset($data['img'])){
                $data['img'] = explode('/',Storage::disk('public')->put('/img/service', $data['img']))[1];
            }
            $page->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $page;
    }
}
