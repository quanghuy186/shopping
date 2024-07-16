<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'home']);

Route::get('/login', [IndexController::class, 'login'])->name('admin.login');
Route::post('/login', [IndexController::class, 'auth'])->name('auth.login');

Route::get('/register', [IndexController::class, 'register'])->name('admin.register');
Route::post('/register', [IndexController::class, 'formRegister'])->name('auth.register');