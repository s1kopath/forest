<?php

namespace App\Listeners;

use App\Events\ContestTransactionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContestTransactionListener
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
     * @param  \App\Events\ContestTransactionEvent  $event
     * @return void
     */
    public function handle(ContestTransactionEvent $event)
    {
        //
    }
}
