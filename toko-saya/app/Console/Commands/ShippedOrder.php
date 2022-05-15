<?php 

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use App\Events\OrderShippedEvent;

class ShippedOrder extends Command 
{
    protected $name = 'shipped:order';

    protected $description = 'Mengirim data order';

    public function handle()
    {
        $order = Order::orderBy('id', 'desc')->first();

        event(new OrderShippedEvent($order));
    }
}