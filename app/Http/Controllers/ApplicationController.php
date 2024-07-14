<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\StoreRequest;
use App\Service\ApplicationService;

class ApplicationController extends Controller
{
    public $service;

    public function __construct(ApplicationService $service)
    {
        $this->service = $service;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        $popup = ['type' => 'success', 'message' => 'Application created!'];
        return view('index', compact('data', $popup));
    }
}
