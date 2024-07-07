<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Service\DirectionService;

class BaseController extends Controller
{
    public $service;

    public function __construct(DirectionService $service)
    {
        $this->service = $service;
    }


}
