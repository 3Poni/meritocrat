<?php

namespace App\Http\Controllers\Admin\Applications;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\CustomPage;

class ShowController extends Controller
{

    public function __invoke(Application $application)
    {
        return view ('admin.applications.show', compact('application'));
    }
}
