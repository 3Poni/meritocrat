<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;


class PartnersController extends Controller
{
    public function __invoke(Partner $partner, Request $request)
    {
        return response()->json(['result' => $partner::with('tags')->filter(request(['tag_id']))->paginate(2)->appends(request(['tag_id']))], 200);
    }
}
