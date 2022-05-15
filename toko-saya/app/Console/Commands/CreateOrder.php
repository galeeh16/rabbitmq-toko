<?php 

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use App\Events\OrderCreatedEvent;

class CreateOrder extends Command 
{
    protected $name = 'create:order';

    protected $description = 'Membuat data order';

    public function handle()
    {
        $data = [
            'user_id' => 1,
            'product_name' => 'Pasta Gigi',
            'quantity' => 2,
            'total_price' => 24000
        ];

        $order = Order::create($data);

        $array = $data;

        event(new OrderCreatedEvent($array));
    }
}