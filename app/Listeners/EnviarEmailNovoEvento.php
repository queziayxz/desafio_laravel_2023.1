<?php

namespace App\Listeners;

use App\Events\NovoEvento;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailNovoEvento
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
     * @param  \App\Events\NovoEvento  $event
     * @return void
     */
    public function handle(NovoEvento $event)
    {
        $users = \App\Models\User::all();

        foreach($users as $user) {
            $email = new \App\Mail\Evento($user,$event->content);
            $where = now()->addSecond(15);
            Mail::to($user)->later($where,$email);
        }
    }
}
