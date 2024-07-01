<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Controllers\Controller;
use App\Service\NewsletterService;

class BaseController extends Controller
{
    public $Newsletter;

    public function __construct(NewsletterService $Newsletter)
    {
        $this->Newsletter = $Newsletter;
    }


}
