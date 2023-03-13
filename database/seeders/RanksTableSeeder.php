<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ranks')->delete();
        
        \DB::table('ranks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'rank_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:49:15',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'rank_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-04 07:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 7,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 8,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 9,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'rank_id' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 11:20:58',
                'updated_at' => '2023-03-13 11:20:58',
            ),
        ));
        
        
    }
}