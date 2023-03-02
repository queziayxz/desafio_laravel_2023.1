<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AutomaticMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:AutomaticMailCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia e-mail automaticamente';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
