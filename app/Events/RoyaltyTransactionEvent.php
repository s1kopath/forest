<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RoyaltyTransactionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_id, $amount, $reference_number, $from_user_id, $royalty_gen, $royalty_level;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($bonus)
    {
        $this->user_id = $bonus['user_id'];
        $this->amount = $bonus['amount_per_month'];
        $this->reference_number = $bonus['id'];
        $this->from_user_id = $bonus['from_user_id'];
        $this->royalty_gen = $bonus['royalty_gen'];
        $this->royalty_level = $bonus['royalty_level'];
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
