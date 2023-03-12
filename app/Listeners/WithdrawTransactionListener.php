<?php

namespace App\Listeners;

use App\Events\WithdrawTransactionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WithdrawTransactionListener
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
     * @param  \App\Events\WithdrawTransactionEvent  $event
     * @return void
     */
    public function handle(WithdrawTransactionEvent $event)
    {
        //
    }
}
