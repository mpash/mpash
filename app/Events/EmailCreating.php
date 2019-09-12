<?php

namespace App\Events;

use App\UserEmail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class EmailCreating
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var UserEmail
     */
    public $email;

    /**
     * Create a new event instance.
     *
     * @param  UserEmail  $email
     */
    public function __construct(UserEmail $email)
    {
        $this->email = $email;
    }
}
