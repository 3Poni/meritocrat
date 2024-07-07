<?php

namespace App\Http\Controllers\Admin\Directions;

use App\Http\Controllers\Controller;
use App\Models\Direction;

class DeleteController extends Controller
{

    public function __invoke(Direction $direction)
    {
         $direction->delete();
         return redirect()->route('admin.direction.index');
    }
}
