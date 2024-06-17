<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Service\CustomPageService;

class BaseController extends Controller
{
    public $service;

    public function __construct(CustomPageService $service)
    {
        $this->service = $service;
    }


}
