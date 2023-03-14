<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RankAndRewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rank_and_rewards')->delete();
        
        \DB::table('rank_and_rewards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'IB',
                'level' => 1,
                'reward' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pro-IB',
                'level' => 2,
                'reward' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Master IB',
                'level' => 3,
                'reward' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Corporate IB',
                'level' => 4,
                'reward' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Founder',
                'level' => 5,
                'reward' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
        ));
        
        
    }
}