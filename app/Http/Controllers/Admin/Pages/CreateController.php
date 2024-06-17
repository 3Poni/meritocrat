<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke(Request $request)
    {
        return view ('admin.pages.create');
    }
}
