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

Route::get('/', function () {
//    return view('welcome');
    return view('index');
})->name('index');

Route::group(['namespace' => 'App\Http\Controllers\Admin\Main', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified'] ], function (){
    Route::get('/', IndexController::class)->name('admin.main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Users', 'prefix' => 'admin/users'], function (){
    Route::get('/', IndexController::class)->name('admin.user.index');
    Route::get('/create', CreateController::class)->name('admin.user.create');
    Route::post('/', StoreController::class)->name('admin.user.store');
    Route::get('/{user}', ShowController::class)->name('admin.user.show');
    Route::get('/{user}/edit', EditController::class)->name('admin.user.edit');
    Route::patch('/{user}', UpdateController::class)->name('admin.user.update');
    Route::delete('/{user}', DeleteController::class)->name('admin.user.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Pages', 'prefix' => 'admin/pages'], function (){
    Route::get('/', IndexController::class)->name('admin.page.index');
    Route::get('/create', CreateController::class)->name('admin.page.create');
    Route::post('/', StoreController::class)->name('admin.page.store');
    Route::get('/{page}', ShowController::class)->name('admin.page.show');
    Route::get('/{page}/edit', EditController::class)->name('admin.page.edit');
    Route::patch('/{page}', UpdateController::class)->name('admin.page.update');
    Route::delete('/{page}', DeleteController::class)->name('admin.page.delete');
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

Route::get('/download/{file}', 'App\Http\Controllers\DownloadController')->name('download')->middleware( ['auth', 'admin', 'verified']);

Route::get('/page/{url}', 'App\Http\Controllers\PageController')->name('page');
Route::get('/service/{url}', 'App\Http\Controllers\ServiceController')->name('service');

Route::post('/application', ['App\Http\Controllers\ApplicationController', 'store'])->name('application.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/direction/{url}', function () {
    // TODO make controller
    return view('index');
})->name('direction');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/taxes', function () {
    return view('taxes');
})->name('taxes');

Route::get('/consulting', function () {
    return view('consulting');
})->name('consulting');

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

Route::get('/vacancy', function () {
    return view('vacancy');
})->name('vacancy');

Auth::routes(['verify' => true]);
