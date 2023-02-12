<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommisionController;
use App\Http\Controllers\PackageController;


Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->middleware('auth')->name('auth_login');
Route::get('forget-password', [AuthController::class, 'forgetPassword'])->name('forget_password');
Route::match(['get', 'post'], 'register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('ref/{refer_code}', [AuthController::class, 'registerWithRefer'])->name('register_with_refer');


Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('package', PackageController::class);
    Route::resource('commision', CommisionController::class);
});
