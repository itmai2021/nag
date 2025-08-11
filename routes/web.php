<?php

use App\Http\Controllers\BusinessUnitController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/company', [CompanyController::class, 'index'])->name('company.index');
    Route::post('/admin/company/store', [CompanyController::class, 'store'])->name('company.store');
    Route::put('/admin/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/admin/company/delete/{id}', [CompanyController::class, 'destroy'])->name('company.delete');

    Route::get('/admin/business_unit', [BusinessUnitController::class, 'index'])->name('business_unit.index');
    Route::post('/admin/business_unit/store', [BusinessUnitController::class, 'store'])->name('business_unit.store');
    Route::put('/admin/business_unit/update/{id}', [BusinessUnitController::class, 'update'])->name('business_unit.update');
    Route::delete('/admin/business_unit/delete/{id}', [BusinessUnitController::class, 'destroy'])->name('business_unit.delete');

    Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
    Route::post('/admin/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::put('/admin/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/admin/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');
});
