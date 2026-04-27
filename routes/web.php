<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::group(['prefix' => 'pricing', 'as' => 'pricing.'], function () {
    Route::view('/membership', 'pricing.membership')->name('membership');
    Route::view('/launchpad', 'pricing.launchpad')->name('launchpad');
    Route::view('/scale', 'pricing.scale')->name('scale');
    Route::view('/academy', 'pricing.academy')->name('academy');
    Route::view('/studio', 'pricing.studio')->name('studio');
    Route::view('/compare', 'pricing.compare')->name('compare');
});

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/latest', [BlogController::class, 'latest'])->name('latest');
    Route::get('/startup-stories', [BlogController::class, 'stories'])->name('stories');
    Route::get('/tutorials', [BlogController::class, 'tutorials'])->name('tutorials');
    Route::get('/insights', [BlogController::class, 'insights'])->name('insights');
    Route::get('/announcements', [BlogController::class, 'announcements'])->name('announcements');
    Route::get('/{blog:slug}', [BlogController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
    Route::get('/about', [CompanyController::class, 'about'])->name('about');
    Route::get('/leadership', [CompanyController::class, 'leadership'])->name('leadership');
    Route::get('/partners', [CompanyController::class, 'partners'])->name('partners');
    Route::get('/careers', [CompanyController::class, 'careers'])->name('careers');
    Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
    Route::get('/become-partner', [CompanyController::class, 'becomePartner'])->name('become-partner');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
