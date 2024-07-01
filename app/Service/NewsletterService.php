<?php

namespace App\Service;

use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;

class NewsletterService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            Newsletter::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $newsletter)
    {
        try {
            DB::beginTransaction();
            $newsletter->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $newsletter;
    }
}
