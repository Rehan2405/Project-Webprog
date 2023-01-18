<?php

use App\Http\Controllers\destinationcontroller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoriteController;
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


Route::get('/', [destinationcontroller::class, 'dest'])->name('destinations');

Route::get('/search', [SearchController::class, 'search'])->name('search');

// Detail Section
Route::get('/detail/{id}', [DetailController::class, 'index']);
Route::get('/SaveReview', [DetailController::class, 'Save']);
Route::get('/DeleteReview', [DetailController::class, 'Delete']);

Route::get('/about', [FavoriteController::class, 'about'])->name('about');
Route::get('/favourite', [FavoriteController::class, 'destination'])->name('favourite');
