<?php

namespace Database\Seeders;

use App\Models\StakingRoi;
use App\Models\User;
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

        // demo user
        $newUser = User::create([
            'username' => 'a',
            'name' => 'Frankie',
            'email' => 'frankie@gmail.com',
            'password' => bcrypt('a'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
        ]);
        Wallet::create([
            'user_id' => $newUser->id,
            'main_amount' => 500002.00,
            'bonus_amount' => 202.00,
            'withdrawable_amount' => 499800.00,
            'total_earning' => 22.00,
        ]);

        $newUser1 = User::create([
            'name' => 'Nero Henderson',
            'username' => 'kecabu',
            'email' => 'hyguruxodu@mailinator.com',
            'password' => bcrypt('hyguruxodu@mailinator.com'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
            'referer_id' => $newUser->id
        ]);
        Wallet::create([
            'user_id' => $newUser1->id,
            'main_amount' => 20,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
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
        Wallet::create([
            'user_id' => $newUser2->id,
            'main_amount' => 22,
            'bonus_amount' => 22,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
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
        Wallet::create([
            'user_id' => $newUser3->id,
            'main_amount' => 20,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
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
        Wallet::create([
            'user_id' => $newUser4->id,
            'main_amount' => 20,
            'bonus_amount' => 20,
            'withdrawable_amount' => 0,
            'total_earning' => 0,
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
