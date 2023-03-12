<?php

namespace App\Listeners;

use App\Models\Transaction;
use App\Events\StakingTransactionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        Transaction::create([
            'user_id' => $event->user_id,
            'amount' => $event->amount,
            'type' => 'Credit',
            'purpose' => 'Staking ROI',
            'reference_number' => $event->reference_number,
            'stake_amount' => $event->stake_amount,
            'stake_duration' => $event->stake_duration
        ]);
    }
}
