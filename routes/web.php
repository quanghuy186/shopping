<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;

Route::get('/', [IndexController::class, 'home'])->name('home')->middleware(AuthMiddleware::class);

Route::get('/login', [IndexController::class, 'login'])->name('admin.login')->middleware(LoginMiddleware::class);
Route::post('/login', [IndexController::class, 'auth'])->name('auth.login');

Route::get('/register', [IndexController::class, 'register'])->name('admin.register');
Route::post('/register', [IndexController::class, 'formRegister'])->name('auth.register');

Route::get('/logout', [IndexController::class, 'logout'])->name('logout');