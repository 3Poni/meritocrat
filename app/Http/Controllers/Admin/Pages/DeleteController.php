<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\CustomPage;


class DeleteController extends BaseController
{

    public function __invoke(CustomPage $page)
    {
         $page->delete();
         return redirect()->route('admin.page.index');
    }
}
