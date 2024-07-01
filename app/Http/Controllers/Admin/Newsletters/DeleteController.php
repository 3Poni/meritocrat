<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Models\Newsletter;

class DeleteController extends BaseController
{

    public function __invoke(Newsletter $newsletter)
    {
         $newsletter->delete();
         return redirect()->route('admin.newsletter.index');
    }
}
