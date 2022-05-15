<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;

class CreateOrderJob extends Job implements ShouldQueue
{
    protected $order;

    public function __construct(array $order)
    {
        $this->onConnection('rabbitmq_direct');
        $this->order = $order;
    }

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
