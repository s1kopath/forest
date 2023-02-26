<?php

namespace App\Jobs;

use App\Models\Otp;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class TempOtpRemoverJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $otp = Otp::find($this->details['id']);
        if ($otp) {
            $otp->resent_count = 0;
            $otp->save();
        }
        // return 1;
    }
}
