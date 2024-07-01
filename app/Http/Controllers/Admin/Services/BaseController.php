<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Service\ServiceService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }


}
