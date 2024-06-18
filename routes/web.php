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

Route::post('/application', ['App\Http\Controllers\ApplicationController', 'store'])->name('application.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

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
