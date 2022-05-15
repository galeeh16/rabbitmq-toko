<?php

namespace App\Events;

class CustomEvent extends Event
{
    public $order; 

    public function __construct(array $order)
    {
        $this->order = $order;
    }

    public function handle()
    {

    }
}