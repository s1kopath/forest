<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StakingRebateBonusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staking_rebate_bonuses')->delete();
        
        \DB::table('staking_rebate_bonuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'bonus_from' => 4,
                'user_stake_id' => 4,
                'amount' => 4.5,
                'date' => '2023-03-12',
                'generation' => 1,
                'level' => 1,
                'status' => 1,
                'created_at' => '2023-03-12 13:47:16',
                'updated_at' => '2023-03-12 13:47:16',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'bonus_from' => 4,
                'user_stake_id' => 4,
                'amount' => 4.5,
                'date' => '2023-03-12',
                'generation' => 1,
                'level' => 1,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
        ));
        
        
    }
}