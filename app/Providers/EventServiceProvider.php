<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Events\DepositTransactionEvent;
use App\Listeners\DepositTransactionListener;
use App\Events\WithdrawTransactionEvent;
use App\Listeners\WithdrawTransactionListener;
use App\Events\StakingTransactionEvent;
use App\Listeners\StakingTransactionListener;
use App\Events\RoyaltyTransactionEvent;
use App\Listeners\RoyaltyTransactionListener;
use App\Events\RewardTransactionEvent;
use App\Listeners\RewardTransactionListener;
use App\Events\ContestTransactionEvent;
use App\Listeners\ContestTransactionListener;
use App\Events\JoiningBonusEvent;
use App\Listeners\JoiningBonusListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],
        DepositTransactionEvent::class => [
            DepositTransactionListener::class,
        ],
        WithdrawTransactionEvent::class => [
            WithdrawTransactionListener::class,
        ],
        JoiningBonusEvent::class => [
            JoiningBonusListener::class,
        ],
        StakingTransactionEvent::class => [
            StakingTransactionListener::class,
        ],
        RoyaltyTransactionEvent::class => [
            RoyaltyTransactionListener::class,
        ],
        RewardTransactionEvent::class => [
            RewardTransactionListener::class,
        ],
        ContestTransactionEvent::class => [
            ContestTransactionListener::class,
        ],
    ];

    /**
     * The model observers for your application.
     *
     * @var array
     */
    protected $observers = [
        User::class => [UserObserver::class],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
