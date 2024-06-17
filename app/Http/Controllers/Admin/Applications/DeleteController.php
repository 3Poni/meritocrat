<?php

namespace App\Http\Controllers\Admin\Applications;


use App\Models\Application;

class DeleteController extends BaseController
{

    public function __invoke(Application $application)
    {
         $application->delete();
         return redirect()->route('admin.application.index');
    }
}
