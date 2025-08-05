<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/news', [LandingController::class, 'news'])->name('news');
Route::get('/news_detail', [LandingController::class, 'news_detail'])->name('news_detail');
Route::get('/about_us', [LandingController::class, 'about_us'])->name('about_us');
