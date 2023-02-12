<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommisionController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Dashboard\PublicDashboardController;
use App\Http\Controllers\StackingRoisController;


Route::get('/', function () {
    return view('front-end.index');
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

    Route::controller(StackingRoisController::class)->group(function () {
        Route::match(['get', 'post'], '/add-stacking-rois', 'addStacking')->name('add_stacking_rois');
        Route::get('/manage-stacking-rois', 'index')->name('manage_stacking_rois');
        Route::get('/delete-stack/{id}', 'destroy')->name('delete_stack');
        Route::match(['get', 'post'], '/update-stacking-rois/{id}', 'updateStacking')->name('update_stacking_rois');
    });
});

Route::prefix('public')->middleware('public')->group(function () {
    Route::get('/', [PublicDashboardController::class, 'publicDashboard'])->name('public_dashboard');
});
