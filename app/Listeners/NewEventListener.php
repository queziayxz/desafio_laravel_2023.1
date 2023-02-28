<?php

namespace App\Listeners;

use App\Events\NewEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewEventListener
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
     * @param  \App\Events\NewEvent  $event
     * @return void
     */
    public function handle(NewEvent $event)
    {
        $users = \App\Models\User::all();

        foreach($users as $user) {
            $email = new \App\Mail\NewEventMail($user,$event->content);
            $where = now()->addSecond(15);
            Mail::to($user)->later($where,$email);
        }
    }
}
