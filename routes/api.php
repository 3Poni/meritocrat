<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/projects', 'App\Http\Controllers\Api\ProjectsController');
Route::get('/partners', 'App\Http\Controllers\Api\PartnersController');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
