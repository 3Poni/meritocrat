<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Controllers\Controller;
use App\Service\NewsletterService;

class BaseController extends Controller
{
    public $newsletter;

    public function __construct(NewsletterService $newsletter)
    {
        $this->newsletter = $newsletter;
    }
}
