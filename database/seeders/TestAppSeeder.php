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
            'main_amount' => 500000.00,
            'bonus_amount' => 200.00,
            'withdrawable_amount' => 499800.00,
            'total_earning' => 0.00,
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
