<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\TestAppSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AdminSeeder::class);
        // $this->call(TestAppSeeder::class);
        $this->call(TestAmountForIbGainsTableSeeder::class);
        $this->call(TestIbRoyalitiesTableSeeder::class);
        $this->call(TestRanksTableSeeder::class);
        $this->call(TestRankAndRewardsTableSeeder::class);
        $this->call(TestStakingRoisTableSeeder::class);
        $this->call(TestUsersTableSeeder::class);
        $this->call(TestUserDetailsTableSeeder::class);
        $this->call(TestUserStakesTableSeeder::class);
        $this->call(TestWalletsTableSeeder::class);
    }
}
