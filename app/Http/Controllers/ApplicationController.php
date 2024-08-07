<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\StoreRequest;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;
use App\Service\ApplicationService;

class ApplicationController extends Controller
{
    public $service;

    public function __construct(ApplicationService $service)
    {
        $this->service = $service;
    }

    public function store(StoreRequest $request, Service $service, Partner $partner, Review $review)
    {
        $data = $request->validated();
        $this->service->store($data);
        $popup = ['type' => 'success', 'message' => 'Ваша заявка отправлена!'];
        return redirect('/')->with('popup',$popup);
    }
}
