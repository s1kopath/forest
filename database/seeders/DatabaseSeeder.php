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
        $this->call(AmountForIbGainsTableSeeder::class);
        $this->call(IbRoyalitiesTableSeeder::class);
        $this->call(RanksTableSeeder::class);
        $this->call(RankAndRewardsTableSeeder::class);
        $this->call(StakingRebatesTableSeeder::class);
        $this->call(StakingRebateBonusesTableSeeder::class);
        $this->call(StakingRoisTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(UserStakesTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
    }
}
