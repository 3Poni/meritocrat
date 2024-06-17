<?php

namespace App\Http\Controllers\Admin\Applications;

use App\Http\Controllers\Controller;
use App\Models\Application;

class EditController extends Controller
{

    public function __invoke(Application $application)
    {
         return view ('admin.applications.edit', compact('application'));
    }
}
