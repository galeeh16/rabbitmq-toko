<?php

namespace App\Events;

class OrderCreatedEvent extends Event
{
    public $order; 

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function handle()
    {

    }
}
