<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [IndexController::class, 'home'])->name('page.home')->middleware([AuthMiddleware::class]);

Route::resource('/category', CategoryController::class);
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware(RoleMiddleware::class);

Route::get('/login', [AuthController::class, 'login'])->name('admin.login')->middleware(LoginMiddleware::class);
Route::post('/login', [AuthController::class, 'auth'])->name('auth.login');

Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('/register', [AuthController::class, 'formRegister'])->name('auth.register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');