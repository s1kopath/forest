<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StakingTransactionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_id, $amount, $reference_number, $stake_amount, $stake_duration;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($stake)
    {
        $this->user_id = $stake['user_id'];
        $this->amount = $stake['amount_per_month'];
        $this->reference_number = $stake['id'];
        $this->stake_amount = $stake['amount'];
        $this->stake_duration = $stake['duration'];
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
