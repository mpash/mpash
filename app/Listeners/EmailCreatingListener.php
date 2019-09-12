<?php

namespace App\Listeners;

use App\Events\EmailCreating;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailCreatingListener
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
     * @param  EmailCreating  $event
     * @return void
     */
    public function handle(EmailCreating $event)
    {
        $user = $event->email->user;
        if ($user->emails()->count() === 0) {
            $event->email->primary = true;
        }
    }
}
