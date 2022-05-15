<?php

namespace App\Events;

use App\Models\Order;

class OrderShippedEvent extends Event
{
    public $order; 

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function handle()
    {

    }
}
