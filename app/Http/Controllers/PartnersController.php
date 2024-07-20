<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Tag;

class PartnersController extends Controller
{
    public function __invoke(Partner $partner)
    {
        $data = $partner::with('tags');
        $partners = $data->filter(request(['tag_id']))->paginate(2)->appends(request(['tag_id']));
        $tags_ids = !empty(request(['tag_id'])) ? explode(',',request(['tag_id'])['tag_id']) : [];
        $tags = $data->getRelation('tags')->groupBy('tag_id')->get();
        return view ('partners', compact('partners', 'tags', 'tags_ids'));
    }
}
