<?php

namespace App\Http\Controllers\Admin\Applications;

use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        return view ('admin.applications.create');
    }
}
