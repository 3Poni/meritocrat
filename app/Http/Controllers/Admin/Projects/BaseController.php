<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Service\ProjectService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }


}
