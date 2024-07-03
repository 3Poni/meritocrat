<?php

namespace App\Service;

use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if( isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }
            if (isset($data['img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/partner', $data['img']))[2];
            }
            if (isset($data['slider_img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/partner', $data['img']))[2];
            }
            $partner = Partner::firstOrcreate($data);
            if( isset($tagIds)) {
                $partner->tags()->attach($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $partner)
    {
        try {
            DB::beginTransaction();
            if( isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            } else {
                $tagIds = null;
                $partner->tags()->sync($tagIds);
            }
            if (isset($data['img'])){
                $data['img'] = explode('/',Storage::disk('public')->put('/img/partner', $data['img']))[2];
            }
            if (isset($data['slider_img'])) {
                $data['img'] = explode('/', Storage::disk('public')->put('/img/partner', $data['img']))[2];
            }
            $partner->update($data);
            if( isset($tagIds)) {
                $partner->tags()->sync($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $partner;
    }
}
