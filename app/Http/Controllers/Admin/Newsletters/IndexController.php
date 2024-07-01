<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $newsletters = newsletter::all();
        return view ('admin.newsletters.index', compact('newsletters'));
    }
}
