<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('showLoginForm')->middleware('guest');
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('showRegisterForm')->middleware('guest');

Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('post', PostController::class);

Route::redirect('/', 'post');
// Route::get('/', function () {
//     return view('welcome');
// });
