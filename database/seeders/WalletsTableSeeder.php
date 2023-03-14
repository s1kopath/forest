<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
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
                'main_amount' => 500362.0,
                'bonus_amount' => 203.0,
                'withdrawable_amount' => 500219.0,
                'total_earning' => 31.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-13 11:21:48',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'main_amount' => 62328.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 30.0,
                'total_earning' => 30.0,
                'status' => '1',
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-12 13:52:20',
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
            7 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'main_amount' => 20.0,
                'bonus_amount' => 20.0,
                'withdrawable_amount' => 0.0,
                'total_earning' => 0.0,
                'status' => '1',
                'created_at' => '2023-03-13 11:20:58',
                'updated_at' => '2023-03-13 11:21:48',
            ),
        ));
        
        
    }
}