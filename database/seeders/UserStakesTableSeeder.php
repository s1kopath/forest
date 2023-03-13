<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserStakesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_stakes')->delete();
        
        \DB::table('user_stakes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'staking_rois_id' => 2,
                'amount' => 4500.0,
                'percentage' => 3.0,
                'duration' => 6,
                'amount_per_month' => 270.0,
                'completed' => 1,
                'start_date' => '2023-02-02',
                'end_date' => '2023-08-02',
                'next_payout' => '2023-04-02',
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'staking_rois_id' => 3,
                'amount' => 4500.0,
                'percentage' => 4.0,
                'duration' => 12,
                'amount_per_month' => 540.0,
                'completed' => 0,
                'start_date' => '2023-03-02',
                'end_date' => '2024-03-02',
                'next_payout' => '2023-04-02',
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'staking_rois_id' => 1,
                'amount' => 60.0,
                'percentage' => 2.5,
                'duration' => 3,
                'amount_per_month' => 1.8,
                'completed' => 0,
                'start_date' => '2023-03-04',
                'end_date' => '2023-06-04',
                'next_payout' => '2023-04-04',
                'status' => 1,
                'created_at' => '2023-03-04 07:46:39',
                'updated_at' => '2023-03-04 07:46:39',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'staking_rois_id' => 2,
                'amount' => 250.0,
                'percentage' => 3.0,
                'duration' => 6,
                'amount_per_month' => 15.0,
                'completed' => 2,
                'start_date' => '2023-03-04',
                'end_date' => '2023-09-04',
                'next_payout' => '2023-04-12',
                'status' => 1,
                'created_at' => '2023-03-04 07:47:14',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 8,
                'staking_rois_id' => 3,
                'amount' => 600.0,
                'percentage' => 4.0,
                'duration' => 12,
                'amount_per_month' => 72.0,
                'completed' => 0,
                'start_date' => '2023-03-04',
                'end_date' => '2024-03-04',
                'next_payout' => '2023-04-04',
                'status' => 1,
                'created_at' => '2023-03-04 07:47:47',
                'updated_at' => '2023-03-04 07:47:47',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 9,
                'staking_rois_id' => 3,
                'amount' => 650.0,
                'percentage' => 4.0,
                'duration' => 12,
                'amount_per_month' => 78.0,
                'completed' => 0,
                'start_date' => '2023-03-04',
                'end_date' => '2024-03-04',
                'next_payout' => '2023-04-04',
                'status' => 1,
                'created_at' => '2023-03-04 07:48:22',
                'updated_at' => '2023-03-04 07:48:22',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'staking_rois_id' => 2,
                'amount' => 52.0,
                'percentage' => 3.0,
                'duration' => 6,
                'amount_per_month' => 3.12,
                'completed' => 0,
                'start_date' => '2023-03-04',
                'end_date' => '2023-09-04',
                'next_payout' => '2023-04-04',
                'status' => 1,
                'created_at' => '2023-03-04 07:49:08',
                'updated_at' => '2023-03-04 07:49:08',
            ),
        ));
        
        
    }
}