<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;

class CreateOrderJob extends Job implements ShouldQueue
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('From job ' . date('Y-m-d H:i:s'));
    }
}
