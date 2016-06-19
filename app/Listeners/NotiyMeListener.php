<?php

namespace App\Listeners;

use App\Events\AddArticalEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotiyMeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AddArticalEvent  $event
     * @return void
     */
    public function handle(AddArticalEvent $event)
    {
        //
    }
}
