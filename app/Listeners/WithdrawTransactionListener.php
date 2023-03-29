<?php

namespace App\Listeners;

use App\Models\Transaction;
use App\Events\WithdrawTransactionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
