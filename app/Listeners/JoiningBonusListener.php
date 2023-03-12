<?php

namespace App\Listeners;

use App\Models\Wallet;
use App\Events\JoiningBonusEvent;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class JoiningBonusListener
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
     * @param  \App\Events\JoiningBonusEvent  $event
     * @return void
     */
    public function handle(JoiningBonusEvent $event)
    {
        $user = User::find($event->user_id);
        $userWallet = Wallet::where('user_id', $user->id)->first();

        $userWallet->main_amount += 20;
        $userWallet->bonus_amount += 20;

        $userWallet->save();

        Transaction::create([
            'user_id' => $user->id,
            'amount' => 20,
            'type' => 'Credit',
            'purpose' => 'Invitation Gift',
            'from_user_id' => 1
        ]);

        if ($user->userToReferer) {
            $refererWallet = Wallet::where('user_id', $user->userToReferer->id)->first();

            $refererWallet->main_amount += 1;
            $refererWallet->bonus_amount += 1;

            $refererWallet->save();

            Transaction::create([
                'user_id' => $refererWallet->user_id,
                'amount' => 1,
                'type' => 'Credit',
                'purpose' => 'Invitation Gift',
                'from_user_id' => $user->id
            ]);
        }
    }
}
