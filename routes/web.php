<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\PublicDashboardController;
use App\Http\Controllers\StackingRoisController;
use App\Http\Controllers\IbRoyalityController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\IbController;
use App\Http\Controllers\User\FundController;
use App\Http\Controllers\User\StakeController;
use App\Http\Controllers\MonthlyContestController;
use App\Http\Controllers\Otp\OtpController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\User\HomeController;


Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('markets', [HomeController::class, 'markets'])->name('markets');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('careers', [HomeController::class, 'careers'])->name('careers');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('education', [HomeController::class, 'education'])->name('education');
Route::get('help-center', [HomeController::class, 'helpCenter'])->name('help_center');
Route::get('customers', [HomeController::class, 'customers'])->name('customers');
Route::get('road-map', [HomeController::class, 'roadMap'])->name('road_map');
Route::get('legal-docs', [HomeController::class, 'legalDocs'])->name('legal_docs');

// Auth Routes
Route::match(['get', 'post'], 'admin-login', [AuthController::class, 'login'])->name('auth_login');
Route::get('public-login', [AuthController::class, 'publicLogin'])->name('public_login');
Route::get('admin-register', [AuthController::class, 'adminRegister']);
Route::get('forget-password', [AuthController::class, 'forgetPassword'])->name('forget_password');
Route::match(['get', 'post'], 'register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('ref/{username}', [AuthController::class, 'registerWithRefer'])->name('register_with_refer');

Route::get('otp', [OtpController::class, 'otpPublic'])->name('otp');
Route::post('otp-verify', [OtpController::class, 'verify'])->name('otp_verify');
Route::get('email/verify', [AuthController::class, 'verificationNotice'])->middleware('auth')->name('verification.notice');
Route::get('resend-otp', [AuthController::class, 'resendOtp'])->name('resend_otp');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::controller(StackingRoisController::class)->group(function () {
        Route::match(['get', 'post'], '/add-stacking-rois', 'addStacking')->name('add_stacking_rois');
        Route::get('manage-stacking-rois', 'index')->name('manage_stacking_rois');
        Route::get('delete-stack/{id}', 'destroy')->name('delete_stack');
        Route::match(['get', 'post'], 'update-stacking-rois/{id}', 'updateStacking')->name('update_stacking_rois');
    });

    Route::controller(IbRoyalityController::class)->group(function () {
        Route::match(['get', 'post'], '/add-ib-royality', 'addRoyality')->name('add_ib_royality');
        Route::get('manage-ib-royality', 'index')->name('manage_ib_royality');
        Route::get('delete-royality/{id}', 'destroy')->name('delete_royality');
        Route::match(['get', 'post'], 'update-ib-royality/{id}', 'updateRoyality')->name('update_ib_royality');
    });

    Route::controller(GiftController::class)->group(function () {
        Route::match(['get', 'post'], '/add-gift', 'addGift')->name('add_gift');
        Route::get('/manage-gift', 'index')->name('manage_gift');
        Route::match(['get', 'post'], '/update-gift/{id}', 'updateGift')->name('update_gift');
        Route::get('/delete-gift/{id}', 'destroy')->name('delete_gift');
    });

    Route::controller(IbController::class)->group(function () {
        Route::match(['get', 'post'], '/add-ib', 'addIb')->name('add_ib');
        Route::get('/manage-ib', 'index')->name('manage_ib');
        Route::match(['get', 'post'], '/update-ib/{id}', 'updateIb')->name('update_ib');
        Route::get('/delete-ib/{id}', 'destroy')->name('delete_ib');
    });

    Route::controller(MonthlyContestController::class)->group(function () {
        Route::match(['get', 'post'], '/add-monthly-contest', 'addContest')->name('add_monthly_contest');
        Route::get('/manage-monthly-contest', 'index')->name('manage_monthly_contest');
        Route::match(['get', 'post'], '/update-monthly-contest/{id}', 'updateContest')->name('update_monthly_contest');
        Route::get('/delete-contest/{id}', 'destroy')->name('delete_contest');
    });
});

Route::prefix('user')->middleware(['public', 'verified'])->group(function () {
    Route::get('/', [PublicDashboardController::class, 'publicDashboard'])->name('public_dashboard');
    Route::prefix('profile')->group(function () {
        Route::get('/', [PublicDashboardController::class, 'publicProfile'])->name('public_profile');
        Route::get('fund', [FundController::class, 'fund'])->name('public_fund');
        // stake
        Route::post('fund/stake', [StakeController::class, 'stake'])->name('stake');

        Route::get('history', [PublicDashboardController::class, 'history'])->name('public_history');
        Route::get('referrals', [PublicDashboardController::class, 'referrals'])->name('public_referrals');
        Route::get('downloads', [PublicDashboardController::class, 'downloads'])->name('public_downloads');
        Route::get('become-an-ib', [PublicDashboardController::class, 'becomeAnIb'])->name('public_become_an_ib');
    });
});

Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
