<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class GenerateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:generate {amount : Amount of users which need to generate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $amount = $this->argument('amount');

        factory(User::class, (int)$amount)->create();

        $this->info("{$amount} users where generated");
    }
}
