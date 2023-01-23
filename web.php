<?php

use App\Http\Controllers\destinationcontroller;
use App\Http\Controllers\InsertController;
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


Route::get('/home', [destinationcontroller::class, 'dest'])->name('destinations');
Route::get('/insert', [InsertController::class, 'create']);
Route::post('/insert', [InsertController::class, 'add']);
