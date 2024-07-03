<?php

namespace App\Http\Controllers\Admin\Partners;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Tag;

class EditController extends Controller
{

    public function __invoke(Partner $partner)
    {
        $tags = Tag::all();
         return view ('admin.partners.edit', compact('partner', 'tags'));
    }
}
