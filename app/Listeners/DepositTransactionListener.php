<?php

namespace App\Listeners;

use App\Events\DepositTransactionEvent;
use App\Models\Transaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DepositTransactionListener
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
     * @param  \App\Events\DepositTransactionEvent  $event
     * @return void
     */
    public function handle(DepositTransactionEvent $event)
    {
        Transaction::create([
            'user_id' => $event->user_id,
            'amount' => $event->amount,
            'payment_gateway' => $event->payment_gateway,
            'type' => $event->type,
            'purpose' => $event->purpose,
            'reference_number' => $event->reference_number
        ]);
    }
}
