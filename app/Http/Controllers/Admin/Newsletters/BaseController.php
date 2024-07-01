<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Controllers\Controller;
use App\Service\NewsletterService;

class BaseController extends Controller
{
    public $service;

    public function __construct(NewsletterService $service)
    {
        $this->service = $service;
    }
}
