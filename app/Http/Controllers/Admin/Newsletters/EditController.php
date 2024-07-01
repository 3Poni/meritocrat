<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;

class EditController extends Controller
{

    public function __invoke(Newsletter $newsletter)
    {
         return view ('admin.newsletters.edit', compact('newsletter'));
    }
}
