<?php

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
});

Route::get('/page/{url}', function () {
//    TODO PageController
    return redirect('/');
})->name('page');

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


