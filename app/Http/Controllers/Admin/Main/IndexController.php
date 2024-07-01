<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\CustomPage;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $data = [];
        $data ['usersCount'] = User::all()->count();
        $data ['pagesCount'] = CustomPage::all()->count();
        $data ['serviceCount'] = Service::all()->count();
        $data ['newsletterCount'] = Newsletter::all()->count();
        $data ['vacancyCount'] = Vacancy::all()->count();
        $data ['applicationsCount'] = Application::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
