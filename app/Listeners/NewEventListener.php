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
        $students = \App\Models\Student::all();

        foreach($students as $student) {
            $email = new \App\Mail\NewEventMail($student,$event->content);
            $where = now()->addSecond(15);
            Mail::to($student)->later($where,$email);
        }
    }
}
