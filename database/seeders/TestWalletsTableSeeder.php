<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestWalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallets')->delete();
        
        \DB::table('wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'main_amount' => 500002.0,
                'bonus_amount' => 202.0,
                'withdrawable_amount' => 499860.0,
                'total_earning' => 22.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:46:39',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'main_amount' => 62298.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'main_amount' => 22000.0,
                'bonus_amount' => 22.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'main_amount' => 20.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 7,
                'main_amount' => 20.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 8,
                'main_amount' => 29400.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-04 07:47:47',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 9,
                'main_amount' => 19350.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-04 07:48:22',
            ),
        ));
        
        
    }
}