<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\CustomPage;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $pages = CustomPage::all();
        return view ('admin.pages.index', compact('pages'));
    }
}
