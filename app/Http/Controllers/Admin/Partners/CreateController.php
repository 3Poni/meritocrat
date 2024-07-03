<?php

namespace App\Http\Controllers\Admin\Partners;

use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        $tags = Tag::all();
        return view ('admin.partners.create', compact('tags'));
    }
}
