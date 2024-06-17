<?php

namespace App\Http\Controllers\Admin\Applications;

use App\Http\Controllers\Controller;
use App\Service\ApplicationService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ApplicationService $service)
    {
        $this->service = $service;
    }


}
