<?php

namespace App\Jobs;

use App\Models\User;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AutomaticMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $students = DB::select('SELECT * FROM students WHERE name = :name', ['name' => 'Nicolas Runolfsdottir']);

        foreach($students as $student) {
            $email = new \App\Mail\AutomaticMail($student);
            $where = now()->addSecond(15);
            Mail::to($student)->later($where,$email);
        }
    }
}
