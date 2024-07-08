<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Tag;

class PartnersController extends Controller
{
    public function __invoke(Partner $partner)
    {
        $data = $partner::with('tags');
        $partners = $data->paginate(2);
        $tags = $data->getRelation('tags')->get();
        return view ('partners', compact('partners', 'tags'));
    }
}
