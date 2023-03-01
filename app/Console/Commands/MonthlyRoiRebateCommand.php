<?php

namespace App\Console\Commands;

use App\Http\Controllers\user\StakeController;
use App\Models\StakingRebate;
use Illuminate\Console\Command;

class MonthlyRoiRebateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthly:roi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate monthly rebate on staking roi';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $stakeController = new StakeController();
        $stakeController->distributeStakingBonusSchedule();

        return Command::SUCCESS;
    }
}
