<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Service\TagService;

class BaseController extends Controller
{
    public $service;

    public function __construct(TagService $service)
    {
        $this->service = $service;
    }


}
