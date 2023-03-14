<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AmountForIbGainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('amount_for_ib_gains')->delete();
        
        \DB::table('amount_for_ib_gains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'self_amount' => 60.0,
                'direct_amount' => 302.0,
                'team_amount' => 1552.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:49:15',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'self_amount' => 302.0,
                'direct_amount' => 600.0,
                'team_amount' => 1250.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'self_amount' => 0.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'self_amount' => 0.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 7,
                'self_amount' => 0.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 8,
                'self_amount' => 600.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-04 07:47:47',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 9,
                'self_amount' => 650.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-04 07:48:22',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'self_amount' => 0.0,
                'direct_amount' => 0.0,
                'team_amount' => 0.0,
                'status' => 1,
                'created_at' => '2023-03-13 11:20:58',
                'updated_at' => '2023-03-13 11:20:58',
            ),
        ));
        
        
    }
}