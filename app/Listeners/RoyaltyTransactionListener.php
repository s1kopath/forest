<?php

namespace App\Listeners;

use App\Models\Transaction;
use App\Events\RoyaltyTransactionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        Transaction::create([
            'user_id' => $event->user_id,
            'amount' => $event->amount,
            'type' => 'Credit',
            'purpose' => 'IB Royalty',
            'reference_number' => $event->reference_number,
            'from_user_id' => $event->from_user_id,
            'royalty_gen' => $event->royalty_gen,
            'royalty_level' => $event->royalty_level,
        ]);
    }
}
