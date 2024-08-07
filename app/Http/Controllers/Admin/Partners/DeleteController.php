<?php

namespace App\Http\Controllers\Admin\Partners;

use App\Models\Partner;


class DeleteController extends BaseController
{

    public function __invoke(Partner $partner)
    {
         $partner->delete();
         return redirect()->route('admin.partner.index');
    }
}
