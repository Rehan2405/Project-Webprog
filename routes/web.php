<?php

use App\Http\Controllers\destinationcontroller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Auth;
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

Route::view('loginpage', 'auth.login')->name('loginpage');
Route::get('/', [destinationcontroller::class, 'dest'])->name('destinations');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search-destination', [SearchController::class, 'search_dest'])->name('search_dest');
// Detail Section
Route::get('/detail/{id}', [DetailController::class, 'index']);
Route::get('/SaveReview', [DetailController::class, 'Save']);
Route::get('/DeleteReview', [DetailController::class, 'Delete']);

// insert destination
Route::get('/insert', [InsertController::class, 'create']);
Route::post('/insert', [InsertController::class, 'add']);

// update destination
Route::get('/destination/update/{id}', [destinationcontroller::class, 'Edit'])->name('edit');
Route::put('/destination/update/{id}', [destinationcontroller::class, 'Update']);

// favorite section
Route::get('/AddFavourite', [FavoriteController::class, 'Save']);
Route::get('/DeleteFavourite', [FavoriteController::class, 'Delete']);

Route::get('/about', [FavoriteController::class, 'about'])->name('about');
Route::get('/favourite', [FavoriteController::class, 'destination'])->name('favourite');


Auth::routes();

Route::get('/home', [destinationcontroller::class, 'dest'])->name('home');
