<?php

namespace App\Providers;

use App\Models\Direction;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('allServices',Service::with('directions')->get());
        View::share('staticDirections',Direction::whereNotNull('url_static')->get());
    }
}
