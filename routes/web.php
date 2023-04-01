<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\Otp\OtpController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\FundController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\IbRoyalityController;
use App\Http\Controllers\User\StakeController;
use App\Http\Controllers\StackingRoisController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\MonthlyContestController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PublicDashboardController;

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
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
Route::get('staking', [HomeController::class, 'staking'])->name('staking');
Route::get('forex-trading', [HomeController::class, 'forexTrading'])->name('forex_trading');
Route::get('e-commerce', [HomeController::class, 'ECommerce'])->name('e_commerce');
Route::get('forex-broker', [HomeController::class, 'forexBroker'])->name('forex_broker');
Route::get('all-traders', [HomeController::class, 'allTraders'])->name('all_traders');

// Auth Routes
Route::match(['get', 'post'], 'admin-login', [AuthController::class, 'login'])->name('auth_login');
Route::get('public-login', [AuthController::class, 'publicLogin'])->name('public_login');
Route::get('admin-register', [AuthController::class, 'adminRegister']);
Route::get('api/ref-auth/{keyword}', [AuthController::class, 'refAuth']);
Route::get('forget-password', [AuthController::class, 'forgetPassword'])->name('forget_password');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('ref/{username}', [AuthController::class, 'registerWithRefer'])->name('register_with_refer');

// Route::get('otp', [OtpController::class, 'otpPublic'])->name('otp');
// Route::post('otp-verify', [OtpController::class, 'verify'])->name('otp_verify');
// Route::get('resend-otp', [AuthController::class, 'resendOtp'])->name('resend_otp');
Route::post('email/resend', [AuthController::class, 'resendLink'])->name('resend_link');
Route::get('email/verification', [AuthController::class, 'verificationNotice'])->name('verification.notice');
Route::get('verify/{token}', [AuthController::class, 'verifyEmail']);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('manage-users', [DashboardController::class, 'manageUsers'])->name('manage_users');
        Route::get('manage-ib-users', [IbController::class, 'index'])->name('manage_ib');
        Route::get('inspect/{user_id}', [DashboardController::class, 'inspectUser'])->name('inspect_user');
        Route::get('verify/{user_id}/{status}', [DashboardController::class, 'verifyUser'])->name('verify_user');
    });

    Route::prefix('deposit')->group(function () {
        Route::get('manage-deposit', [DepositController::class, 'manageDeposits'])->name('manage_deposits');
        Route::get('approve-deposit/{id}/{status}', [DepositController::class, 'approveDeposits'])->name('approve_deposits');
    });

    Route::prefix('withdraw')->group(function () {
        Route::get('manage-withdraw', [WithdrawController::class, 'manageWithdraw'])->name('manage_withdraw');
        Route::get('approve-withdraw/{id}/{status}', [WithdrawController::class, 'approveWithdraw'])->name('approve_withdraw');
    });

    Route::controller(StackingRoisController::class)->group(function () {
        Route::match(['get', 'post'], 'add-stacking-rois', 'addStacking')->name('add_stacking_rois');
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

    Route::controller(MonthlyContestController::class)->group(function () {
        Route::match(['get', 'post'], '/add-monthly-contest', 'addContest')->name('add_monthly_contest');
        Route::get('/manage-monthly-contest', 'index')->name('manage_monthly_contest');
        Route::match(['get', 'post'], '/update-monthly-contest/{id}', 'updateContest')->name('update_monthly_contest');
        Route::get('/delete-contest/{id}', 'destroy')->name('delete_contest');
    });

    Route::prefix('banner')->group(function () {
        Route::match(['get', 'post'], 'add-banner', [BannerController::class, 'addBanner'])->name('add_banner');
        Route::get('manage-banner', [BannerController::class, 'manageBanner'])->name('manage_banner');
        Route::match(['get', 'post'], 'edit-banner/{id}', [BannerController::class, 'editBanner'])->name('edit_banner');
        Route::get('delete-banner/{id}', [BannerController::class, 'deleteBanner'])->name('delete_banner');
    });
});

Route::prefix('user')->middleware(['public', 'verified'])->group(function () {
    Route::get('/', [PublicDashboardController::class, 'publicDashboard'])->name('public_dashboard');
    Route::prefix('profile')->group(function () {
        Route::get('/', [PublicDashboardController::class, 'publicProfile'])->name('public_profile');
        Route::get('update-password', [ProfileController::class, 'updatePassword'])->name('update_password');

        Route::post('upload-profile-picture', [ProfileController::class, 'uploadProfilePicture']);
        Route::post('upload-kyc-picture', [ProfileController::class, 'uploadKycPicture']);

        Route::post('/update', [PublicDashboardController::class, 'updatePublicProfile'])->name('update_public_profile');
        Route::post('/update-location', [PublicDashboardController::class, 'editLocation'])->name('edit_location');
        Route::get('fund', [FundController::class, 'fund'])->name('public_fund');
        Route::get('deposit-history/fetch-data', [FundController::class, 'fetchDepositHistoryData']);
        Route::post('new-deposit', [FundController::class, 'newDeposit'])->name('new_deposit');
        Route::get('deposit-payment/{id}', [FundController::class, 'confirmDeposit'])->name('confirm_deposit');

        // set withdraw method 
        Route::post('update-visa', [ProfileController::class, 'updateVisa'])->name('update_visa');
        Route::post('update-bank', [ProfileController::class, 'updateBank'])->name('update_bank');
        Route::post('update-crypto', [ProfileController::class, 'updateCrypto'])->name('update_crypto');

        //withdraw
        Route::get('withdraw-opt-send', [FundController::class, 'withdrawOptSend'])->name('withdraw_opt_send');
        Route::post('submit-withdraw', [FundController::class, 'submitWithdraw'])->name('submit_withdraw');
        Route::get('withdraw-history/fetch-data', [FundController::class, 'fetchWithdrawHistoryData']);

        // stake
        Route::match(['get', 'post'], 'stake', [StakeController::class, 'stake'])->name('stake');
        Route::get('stake-history/fetch-data', [StakeController::class, 'fetchStakeHistoryData']);

        Route::get('history', [PublicDashboardController::class, 'history'])->name('public_history');
        Route::get('history/fetch_data', [PublicDashboardController::class, 'fetchHistoryData']);
        // history
        Route::get('history', [PublicDashboardController::class, 'history'])->name('public_history');
        Route::get('history/deposit', [PublicDashboardController::class, 'deposit_history'])->name('deposit_history');
        Route::get('history/withdraw', [PublicDashboardController::class, 'withdrawal_history'])->name('withdrawal_history');
        Route::get('history/invitation-gift', [PublicDashboardController::class, 'invitation_gift_history'])->name('invitation_gift_history');
        Route::get('history/staking-roi', [PublicDashboardController::class, 'staking_roi_history'])->name('staking_roi_history');
        Route::get('history/ib-royality', [PublicDashboardController::class, 'ib_royality_history'])->name('ib_royality_history');
        Route::get('history/reward', [PublicDashboardController::class, 'reward_history'])->name('reward_history');
        Route::get('history/contest', [PublicDashboardController::class, 'contest_history'])->name('contest_history');
        Route::get('history/transaction', [PublicDashboardController::class, 'transaction_history'])->name('transaction_history');
        Route::get('referrals', [PublicDashboardController::class, 'referrals'])->name('public_referrals');
        Route::get('downloads', [PublicDashboardController::class, 'downloads'])->name('public_downloads');
        Route::get('become-an-ib', [PublicDashboardController::class, 'becomeAnIb'])->name('public_become_an_ib');
    });

    Route::post('deposit-binance', [BinanceController::class, 'test1'])->name('binance_merchant_pay');
});

Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
