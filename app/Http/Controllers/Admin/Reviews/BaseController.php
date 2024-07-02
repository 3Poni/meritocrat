<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Service\ReviewService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ReviewService $service)
    {
        $this->service = $service;
    }


}
