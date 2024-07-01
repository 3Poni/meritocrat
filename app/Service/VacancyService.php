<?php

namespace App\Service;

use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;

class VacancyService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            Vacancy::firstOrcreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $vacancy)
    {
        try {
            DB::beginTransaction();
            $vacancy->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $vacancy;
    }
}
