<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Category;
use App\Models\CustomPage;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $data = [];
        $data ['usersCount'] = User::all()->count();
        $data ['pagesCount'] = CustomPage::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
