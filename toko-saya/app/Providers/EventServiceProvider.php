<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\OrderCreatedEvent::class => [
            \App\Listeners\OrderCreatedListener::class,
        ],
        \App\Events\OrderShippedEvent::class => [
            \App\Listeners\OrderShippedListener::class,
        ],
        \App\Events\CustomEvent::class => [
            \App\Listeners\CustomListener::class,
        ],
    ];
}
