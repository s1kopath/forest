<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StakingRoisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staking_rois')->delete();
        
        \DB::table('staking_rois')->insert(array (
            0 => 
            array (
                'id' => 1,
                'duration' => 3,
                'percentage' => 2.5,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            1 => 
            array (
                'id' => 2,
                'duration' => 6,
                'percentage' => 3.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
            2 => 
            array (
                'id' => 3,
                'duration' => 12,
                'percentage' => 4.0,
                'status' => 1,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
            ),
        ));
        
        
    }
}