<?php

namespace App\Jobs;

use App\Models\Student;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
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
        $students = Student::all();

        Log::info('Data de Amanhã: ' . date('d/m/Y',strtotime("+1 day")));

        foreach($students as $student) {
            if($student->expiration_date == date('Y-m-d',strtotime("+1 day"))) {
                $email = new \App\Mail\AutomaticMail($student);
                $where = now()->addSecond(15);
                Mail::to($student)->later($where,$email);
            }
        }


    }
}
