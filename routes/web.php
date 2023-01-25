<?php

use App\Http\Controllers\destinationcontroller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\InsertController;
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
Route::get('/SaveReview', [DetailController::class, 'Save'])->middleware('Admin');
Route::get('/DeleteReview', [DetailController::class, 'Delete'])->middleware('Admin');

// insert destination
Route::get('/insert', [InsertController::class, 'create'])->middleware('Admin');
Route::post('/insert', [InsertController::class, 'add'])->middleware('Admin');

// update destination
Route::get('/destination/update/{id}', [destinationcontroller::class, 'Edit'])->middleware('Admin')->name('edit');
Route::put('/destination/update/{id}', [destinationcontroller::class, 'Update'])->middleware('Admin');

// Route::put('/DeleteDestination', [destinationcontroller::class, 'DeleteDest'])->middleware('Admin');

// favorite section
Route::get('/AddFavourite', [FavoriteController::class, 'Save'])->middleware('Admin');
Route::get('/DeleteFavourite', [FavoriteController::class, 'Delete'])->middleware('Admin');

Route::get('/about', [FavoriteController::class, 'about'])->name('about');
Route::get('/favourite', [FavoriteController::class, 'destination'])->name('favourite');


Auth::routes();

Route::get('/home', [destinationcontroller::class, 'dest'])->name('home');
