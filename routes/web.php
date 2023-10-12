<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/activity', [MainController::class, 'activity'])->name('activity');
Route::post('/activity/check', [MainController::class, 'activity_check']);
Route::get('/food', [MainController::class, 'food']);
Route::get('/', function () {
    return view('welcome');
});
