<?php 

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomListener implements ShouldQueue 
{
    public $connection = 'rabbitmq_direct';
    
    public function __construct()
    {
        //
    }
    
    public function handle($event)
    {
        Log::info('Custom Listener: ' . json_encode($event->order['product_name']));
    }

}