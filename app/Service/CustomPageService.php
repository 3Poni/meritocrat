<?php

namespace App\Service;

use App\Models\CustomPage;
use Illuminate\Support\Facades\DB;

class CustomPageService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            CustomPage::firstOrcreate($data);
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
            $page->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $page;
    }
}
