<?php

namespace App\Listeners;

use App\Events\StakingTransactionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StakingTransactionListener
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
     * @param  \App\Events\StakingTransactionEvent  $event
     * @return void
     */
    public function handle(StakingTransactionEvent $event)
    {
        //
    }
}
