<?php

namespace App\Listeners;

use App\Events\RewardTransactionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RewardTransactionListener
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
     * @param  \App\Events\RewardTransactionEvent  $event
     * @return void
     */
    public function handle(RewardTransactionEvent $event)
    {
        //
    }
}
