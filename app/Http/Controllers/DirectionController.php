<?php

namespace App\Http\Controllers;

use App\Models\Direction;

class DirectionController extends Controller
{
    public function __invoke(Direction $direction, $url)
    {
        $direction = $direction::with('service')
            ->where('url', $url)->orWhere('url_static', $url)
            ->firstOrFail();
        $view = 'direction.';
        if($direction->url_static) {
            return view ($direction->url_static, compact('direction'));
        }

        switch ($direction->template) {
            case '1':
                $view .= 'template-1';
                break;
            case '2':
                $view .= 'template-2';
        }

        return view ($view, compact('direction'));
    }
}
