<?php

namespace App\Service;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApplicationService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['file'] = Storage::disk('public')->put('/files', $data['file']);
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
            if (isset($data['file'])){
                $data['file'] = Storage::disk('public')->put('/files', $data['file']);
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
