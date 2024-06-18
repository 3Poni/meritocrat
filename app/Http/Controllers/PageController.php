<?php

namespace App\Http\Controllers;

use App\Models\CustomPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke(CustomPage $page, $url)
    {
        $page = $page::where('url', $url)->firstOrFail();
        return view ('page', compact('page'));
    }
}
