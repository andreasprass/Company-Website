<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class,'index'])->name('home')->withoutMiddleware('auth');
Route::get('/home', [DashboardController::class,'index'])->name('home')->withoutMiddleware('auth');


Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'auth'])->name('auth');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/forgot-password',[LoginController::class,'forgot-password'])->name('forgot-password')->middleware('guest');

Route::get('/register', [RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->name('store');

