<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newsletter\StoreRequest;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;
use App\Service\NewsletterService;

class NewsletterController extends Controller
{
    public $service;

    public function __construct(NewsletterService $service)
    {
        $this->service = $service;
    }

    public function store(StoreRequest $request, Service $service, Partner $partner, Review $review)
    {
        $data = $request->validated();
        $this->service->store($data);
        $popup = ['type' => 'success', 'message' => 'Вы подписались на рассылку!'];
        return redirect('/')->with('popup',$popup);
    }
}
