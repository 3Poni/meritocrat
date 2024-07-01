<?php

namespace App\Http\Controllers\Admin\Vacancies;

use App\Http\Controllers\Controller;
use App\Service\VacancyService;

class BaseController extends Controller
{
    public $service;

    public function __construct(VacancyService $service)
    {
        $this->service = $service;
    }


}
