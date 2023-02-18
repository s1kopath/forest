<?php

namespace Database\Seeders;

use App\Models\StakingRoi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StakingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staking = [
            ['duration' => 3, 'percentage' => 2.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['duration' => 6, 'percentage' => 3.0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['duration' => 12, 'percentage' => 4.0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        StakingRoi::insert($staking);
    }
}
