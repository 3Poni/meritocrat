<?php

namespace App\Http\Controllers\Admin\Newsletters;

use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        return view ('admin.newsletters.create');
    }
}
