<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\CustomPage;

class ShowController extends Controller
{

    public function __invoke(CustomPage $page)
    {
        return view ('admin.pages.show', compact('page'));
    }
}
