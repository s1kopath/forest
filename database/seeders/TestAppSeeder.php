<?php

namespace Database\Seeders;

use App\Models\AmountForIbGain;
use App\Models\IbRoyality;
use App\Models\Rank;
use App\Models\RankAndReward;
use App\Models\StakingRoi;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserStake;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TestAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // demo staking
        $staking = [
            ['duration' => 3, 'percentage' => 2.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['duration' => 6, 'percentage' => 3.0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['duration' => 12, 'percentage' => 4.0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        StakingRoi::insert($staking);

        $rank_and_reward = [
            ['title' => "IB", 'level' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => "Pro-IB", 'level' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => "Master IB", 'level' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => "Corporate IB", 'level' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => "Founder", 'level' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        RankAndReward::insert($rank_and_reward);

        $ib_royalty = [
            ['rank_id' => 1, 'percentage' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rank_id' => 2, 'percentage' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rank_id' => 3, 'percentage' => 7.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rank_id' => 4, 'percentage' => 7.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rank_id' => 5, 'percentage' => 2.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        IbRoyality::insert($ib_royalty);

        // demo user
        $newUser = User::create([
            'username' => 'a',
            'name' => 'Frankie',
            'email' => 'frankie@gmail.com',
            'password' => bcrypt('a'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'is_verified' => 1,
        ]);
        UserDetail::create([
            'user_id' => $newUser->id
        ]);
        Wallet::create([
            'user_id' => $newUser->id,
            'main_amount' => 500002.00,
            'bonus_amount' => 202.00,
            'withdrawable_amount' => 499800.00,
            'total_earning' => 22.00,
        ]);
        Rank::create([
            'user_id' => $newUser->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser->id,
        ]);

        $newUser1 = User::create([
            'name' => 'Nero Henderson',
            'username' => 'b',
            'email' => 'kecabu@gh.com',
            'password' => bcrypt('b'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser->id,
            'is_verified' => 1,
        ]);
        UserDetail::create([
            'user_id' => $newUser1->id
        ]);
        Wallet::create([
            'user_id' => $newUser1->id,
            'main_amount' => 62600,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser1->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser1->id,
        ]);

        $newUser2 = User::create([
            'name' => 'Dieter Stephenson',
            'username' => 'zipynysoz',
            'email' => 'capemynyx@mailinator.com',
            'password' => bcrypt('capemynyx@mailinator.com'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser->id
        ]);
        UserDetail::create([
            'user_id' => $newUser2->id
        ]);
        Wallet::create([
            'user_id' => $newUser2->id,
            'main_amount' => 22000,
            'bonus_amount' => 22,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser2->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser2->id,
        ]);

        $newUser3 = User::create([
            'name' => 'Abel Soto',
            'username' => 'hojyziboge',
            'email' => 'cetulewu@mailinator.com',
            'password' => bcrypt('cetulewu@mailinator.com'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser2->id
        ]);
        UserDetail::create([
            'user_id' => $newUser3->id
        ]);
        Wallet::create([
            'user_id' => $newUser3->id,
            'main_amount' => 20,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser3->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser3->id,
        ]);

        $newUser4 = User::create([
            'name' => 'Kay Juarez',
            'username' => 'fesydybox',
            'email' => 'mawyfigi@mailinator.com',
            'password' => bcrypt('mawyfigi@mailinator.com'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser2->id
        ]);
        UserDetail::create([
            'user_id' => $newUser4->id
        ]);
        Wallet::create([
            'user_id' => $newUser4->id,
            'main_amount' => 20,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser4->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser4->id,
        ]);

        $newUser5 = User::create([
            'name' => 'Melissa Ross',
            'username' => 'c',
            'email' => 'dalic@mailinator.com',
            'password' => bcrypt('c'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser1->id,
            'is_verified' => 1,
        ]);
        UserDetail::create([
            'user_id' => $newUser5->id
        ]);
        Wallet::create([
            'user_id' => $newUser5->id,
            'main_amount' => 30000,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser5->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser5->id,
        ]);

        $newUser6 = User::create([
            'name' => 'Wallace Pugh',
            'username' => 'd',
            'email' => 'qewubi@mailinator.com',
            'password' => bcrypt('d'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser5->id,
            'is_verified' => 1,
        ]);
        UserDetail::create([
            'user_id' => $newUser6->id
        ]);
        Wallet::create([
            'user_id' => $newUser6->id,
            'main_amount' => 20000,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
        ]);
        Rank::create([
            'user_id' => $newUser6->id,
        ]);
        AmountForIbGain::create([
            'user_id' => $newUser6->id,
        ]);


        // demo user stake
        $staking1 = StakingRoi::find(2);
        $stake1 = UserStake::create([
            'user_id' => $newUser->id,
            'staking_rois_id' => $staking1->id,
            'amount' => 4500,
            'duration' => $staking1->duration,
            'amount_per_month' => (4500 * $staking1->duration) / 100,
            'completed' => 1,
            'percentage' => $staking1->percentage,
            'start_date' => now()->subMonths(1),
            'end_date' => now()->addMonths($staking1->duration - 1),
            'next_payout' => now()->addMonth(),
        ]);
        $staking2 = StakingRoi::find(3);
        $stake2 = UserStake::create([
            'user_id' => $newUser->id,
            'staking_rois_id' => $staking2->id,
            'amount' => 4500,
            'duration' => $staking2->duration,
            'amount_per_month' => (4500 * $staking2->duration) / 100,
            'completed' => 0,
            'percentage' => $staking2->percentage,
            'start_date' => now(),
            'end_date' => now()->addMonths($staking2->duration),
            'next_payout' => now()->addMonth(),
        ]);
    }
}
