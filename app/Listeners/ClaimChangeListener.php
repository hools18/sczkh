<?php

namespace App\Listeners;

use App\Events\onClaimChange;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClaimChangeListener
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
     * @param  onClaimChange  $event
     * @return void
     */
    public function handle(onClaimChange $event)
    {
        //
    }
}
