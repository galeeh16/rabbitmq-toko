<?php 

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreatedListener implements ShouldQueue 
{
    public function __construct()
    {
        //
    }
    
    public function handle($event)
    {
        Log::info('Order created from toko saya:' . json_encode($event));
    }

}