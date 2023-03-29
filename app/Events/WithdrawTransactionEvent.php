<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WithdrawTransactionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_id;
    public $amount;
    public $payment_gateway;
    public $type;
    public $purpose;
    public $reference_number;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->user_id = $details['user_id'];
        $this->amount = $details['amount'];
        $this->payment_gateway = $details['payment_gateway'];
        $this->type = $details['type'];
        $this->purpose = $details['purpose'];
        $this->reference_number = $details['reference_number'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
