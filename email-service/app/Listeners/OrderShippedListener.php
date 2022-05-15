<?php 

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShippedListener implements ShouldQueue 
{
    public function __construct()
    {
        //
    }
    
    public function handle($event)
    {
        Log::info('Order shipped from toko saya:' . json_encode($event));
    }

}