<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StakingRebatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staking_rebates')->delete();
        
        \DB::table('staking_rebates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'user_stake_id' => 4,
                'amount' => 15.0,
                'date' => '2023-03-12',
                'next_payout' => '2023-04-12',
                'status' => 1,
                'created_at' => '2023-03-12 13:47:16',
                'updated_at' => '2023-03-12 13:47:16',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'user_stake_id' => 4,
                'amount' => 15.0,
                'date' => '2023-03-12',
                'next_payout' => '2023-04-12',
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
        ));
        
        
    }
}