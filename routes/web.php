<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\IndexController')->name('index');

// ADMIN
Route::group(['namespace' => 'App\Http\Controllers\Admin\Main', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified'] ], function (){
    Route::get('/', IndexController::class)->name('admin.main.index');
});
Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/download/{file}', 'App\Http\Controllers\DownloadController')->name('download')->middleware( ['auth', 'admin', 'verified']);

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Users', 'prefix' => 'admin/users',  ], function (){
        Route::get('/', IndexController::class)->name('admin.user.index');
        Route::get('/create', CreateController::class)->name('admin.user.create');
        Route::post('/', StoreController::class)->name('admin.user.store');
        Route::get('/{user}', ShowController::class)->name('admin.user.show');
        Route::get('/{user}/edit', EditController::class)->name('admin.user.edit');
        Route::patch('/{user}', UpdateController::class)->name('admin.user.update');
        Route::delete('/{user}', DeleteController::class)->name('admin.user.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Directions', 'prefix' => 'admin/directions'], function (){
        Route::get('/', IndexController::class)->name('admin.direction.index');
        Route::get('/create', CreateController::class)->name('admin.direction.create');
        Route::post('/', StoreController::class)->name('admin.direction.store');
        Route::get('/{direction}', ShowController::class)->name('admin.direction.show');
        Route::get('/{direction}/edit', EditController::class)->name('admin.direction.edit');
        Route::patch('/{direction}', UpdateController::class)->name('admin.direction.update');
        Route::delete('/{direction}', DeleteController::class)->name('admin.direction.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Services', 'prefix' => 'admin/services'], function (){
        Route::get('/', IndexController::class)->name('admin.service.index');
        Route::get('/create', CreateController::class)->name('admin.service.create');
        Route::post('/', StoreController::class)->name('admin.service.store');
        Route::get('/{service}', ShowController::class)->name('admin.service.show');
        Route::get('/{service}/edit', EditController::class)->name('admin.service.edit');
        Route::patch('/{service}', UpdateController::class)->name('admin.service.update');
        Route::delete('/{service}', DeleteController::class)->name('admin.service.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Newsletters', 'prefix' => 'admin/newsletters'], function (){
        Route::get('/', IndexController::class)->name('admin.newsletter.index');
        Route::get('/create', CreateController::class)->name('admin.newsletter.create');
        Route::post('/', StoreController::class)->name('admin.newsletter.store');
        Route::get('/{newsletter}', ShowController::class)->name('admin.newsletter.show');
        Route::get('/{newsletter}/edit', EditController::class)->name('admin.newsletter.edit');
        Route::patch('/{newsletter}', UpdateController::class)->name('admin.newsletter.update');
        Route::delete('/{newsletter}', DeleteController::class)->name('admin.newsletter.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Partners', 'prefix' => 'admin/partners'], function (){
        Route::get('/', IndexController::class)->name('admin.partner.index');
        Route::get('/create', CreateController::class)->name('admin.partner.create');
        Route::post('/', StoreController::class)->name('admin.partner.store');
        Route::get('/{partner}/edit', EditController::class)->name('admin.partner.edit');
        Route::patch('/{partner}', UpdateController::class)->name('admin.partner.update');
        Route::delete('/{partner}', DeleteController::class)->name('admin.partner.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Tags', 'prefix' => 'admin/tags'], function (){
        Route::get('/', IndexController::class)->name('admin.tag.index');
        Route::get('/create', CreateController::class)->name('admin.tag.create');
        Route::post('/', StoreController::class)->name('admin.tag.store');
        Route::get('/{tag}/edit', EditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', DeleteController::class)->name('admin.tag.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Projects', 'prefix' => 'admin/projects'], function (){
        Route::get('/', IndexController::class)->name('admin.project.index');
        Route::get('/create', CreateController::class)->name('admin.project.create');
        Route::post('/', StoreController::class)->name('admin.project.store');
        Route::get('/{project}/edit', EditController::class)->name('admin.project.edit');
        Route::patch('/{project}', UpdateController::class)->name('admin.project.update');
        Route::delete('/{project}', DeleteController::class)->name('admin.project.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Vacancies', 'prefix' => 'admin/vacancies'], function (){
        Route::get('/', IndexController::class)->name('admin.vacancy.index');
        Route::get('/create', CreateController::class)->name('admin.vacancy.create');
        Route::post('/', StoreController::class)->name('admin.vacancy.store');
        Route::get('/{vacancy}', ShowController::class)->name('admin.vacancy.show');
        Route::get('/{vacancy}/edit', EditController::class)->name('admin.vacancy.edit');
        Route::patch('/{vacancy}', UpdateController::class)->name('admin.vacancy.update');
        Route::delete('/{vacancy}', DeleteController::class)->name('admin.vacancy.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Reviews', 'prefix' => 'admin/reviews'], function (){
        Route::get('/', IndexController::class)->name('admin.review.index');
        Route::get('/create', CreateController::class)->name('admin.review.create');
        Route::post('/', StoreController::class)->name('admin.review.store');
        Route::get('/{review}', ShowController::class)->name('admin.review.show');
        Route::get('/{review}/edit', EditController::class)->name('admin.review.edit');
        Route::patch('/{review}', UpdateController::class)->name('admin.review.update');
        Route::delete('/{review}', DeleteController::class)->name('admin.review.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Applications', 'prefix' => 'admin/applications'], function (){
        Route::get('/', IndexController::class)->name('admin.application.index');
        Route::get('/create', CreateController::class)->name('admin.application.create');
        Route::post('/', StoreController::class)->name('admin.application.store');
        Route::get('/{application}', ShowController::class)->name('admin.application.show');
        Route::get('/{application}/edit', EditController::class)->name('admin.application.edit');
        Route::patch('/{application}', UpdateController::class)->name('admin.application.update');
        Route::delete('/{application}', DeleteController::class)->name('admin.application.delete');
    });
});
// END ADMIN

Route::get('/services', 'App\Http\Controllers\ServicesController')->name('services');
Route::get('/service/{url}', 'App\Http\Controllers\ServiceController')->name('service');
Route::get('/direction/{url}', 'App\Http\Controllers\DirectionController')->name('direction');
Route::get('/partners', 'App\Http\Controllers\PartnersController')->name('partners');
Route::get('/vacancies', 'App\Http\Controllers\VacanciesController')->name('vacancies');
Route::get('/projects', 'App\Http\Controllers\ProjectsController')->name('projects');

Route::post('/application', ['App\Http\Controllers\ApplicationController', 'store'])->name('application.store');
Route::post('/newsletter', ['App\Http\Controllers\NewsletterController', 'store'])->name('newsletter.store');


Route::get('/about', 'App\Http\Controllers\AboutController')->name('about');

Route::get('/taxes', function () {
    return view('taxes');
})->name('taxes');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/chief-accountant', function () {
    return view('chief-accountant');
})->name('chief-accountant');

Route::get('/accounting-support', function () {
    return view('accounting-support');
})->name('accounting-support');

Route::get('/anticrysis', function () {
    return view('anticrysis');
})->name('anticrysis');

Route::get('/due-diligence', function () {
    return view('due-diligence');
})->name('due-diligence');

Route::get('/effectivity', function () {
    return view('effectivity');
})->name('effectivity');

Route::get('/hr-audit', function () {
    return view('hr-audit');
})->name('hr-audit');

Route::get('/motivation', function () {
    return view('motivation');
})->name('motivation');

Route::get('/outsourcing', function () {
    return view('outsourcing');
})->name('outsourcing');

Route::get('/strategic', function () {
    return view('strategic');
})->name('strategic');

Route::get('/support', function () {
    return view('support');
})->name('support');

Auth::routes(['verify' => true]);
