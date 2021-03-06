<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/', [AuthController::class, 'signin'])->name('signin');
Route::post('/register', [AuthController::class, 'signup'])->name('signup');

Route::get('dashboard', [PostController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('posts', PostController::class)->except(['index'])->middleware('auth');