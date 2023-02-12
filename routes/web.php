<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommisionController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\StackingRoisController;


Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->middleware('auth')->name('auth_login');
Route::get('forget-password', [AuthController::class, 'forgetPassword'])->name('forget_password');
Route::get('resister', [AuthController::class, 'resister'])->name('resister');


Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('package', PackageController::class);
    Route::resource('commision', CommisionController::class);

    Route::controller(StackingRoisController::class)->group(function () {
        Route::match(['get', 'post'], '/add-stacking-rois', 'addStacking')->name('add_stacking_rois');
        Route::get('/manage-stacking-rois', 'index')->name('manage_stacking_rois');
        // Route::get('/delete-product/{id}', 'destroy')->name('delete_product');
        Route::match(['get', 'post'], '/update-stacking-rois/{id}', 'updateStacking')->name('update_stacking_rois');
    });
   

});
