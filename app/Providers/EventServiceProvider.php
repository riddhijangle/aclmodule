<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
  'Acoustep\EntrustGui\Events\UserCreatedEvent' => [
    'App\Listeners\UserCreatedListener',
  ],
  'Acoustep\EntrustGui\Events\UserUpdatedEvent' => [
    'App\Listeners\UserUpdatedListener',
  ],
  'Acoustep\EntrustGui\Events\UserDeletedEvent' => [
    'App\Listeners\UserDeletedListener',
  ],
  'Acoustep\EntrustGui\Events\RoleCreatedEvent' => [
    'App\Listeners\RoleCreatedListener',
  ],
  'Acoustep\EntrustGui\Events\RoleUpdatedEvent' => [
    'App\Listeners\RoleUpdatedListener',
  ],
  'Acoustep\EntrustGui\Events\RoleDeletedEvent' => [
    'App\Listeners\RoleDeletedListener',
  ],
  'Acoustep\EntrustGui\Events\PermissionCreatedEvent' => [
    'App\Listeners\PermissionCreatedListener',
  ],
  'Acoustep\EntrustGui\Events\PermissionUpdatedEvent' => [
    'App\Listeners\PermissionUpdatedListener',
  ],
  'Acoustep\EntrustGui\Events\PermissionDeletedEvent' => [
    'App\Listeners\PermissionDeletedListener',
  ]

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
