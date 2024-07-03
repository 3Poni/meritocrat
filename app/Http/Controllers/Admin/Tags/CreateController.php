<?php

namespace App\Http\Controllers\Admin\Tags;

use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        return view ('admin.tags.create');
    }
}
