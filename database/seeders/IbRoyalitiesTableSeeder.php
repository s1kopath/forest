<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IbRoyalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ib_royalities')->delete();
        
        \DB::table('ib_royalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rank_id' => 1,
                'percentage' => 30.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            1 => 
            array (
                'id' => 2,
                'rank_id' => 2,
                'percentage' => 15.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            2 => 
            array (
                'id' => 3,
                'rank_id' => 3,
                'percentage' => 7.5,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'rank_id' => 4,
                'percentage' => 7.5,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'rank_id' => 5,
                'percentage' => 2.5,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
        ));
        
        
    }
}