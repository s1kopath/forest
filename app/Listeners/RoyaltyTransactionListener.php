<?php

namespace App\Listeners;

use App\Events\RoyaltyTransactionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RoyaltyTransactionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RoyaltyTransactionEvent  $event
     * @return void
     */
    public function handle(RoyaltyTransactionEvent $event)
    {
        //
    }
}
