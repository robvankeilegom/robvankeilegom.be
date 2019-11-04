<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RoobieBoobieee\Bitbucket\Jobs\SyncBitbucket as Job;

class SyncBitbucket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:bitbucket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync bitbucket';

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
     * @return mixed
     */
    public function handle()
    {
      $username = config('services.bitbucket.organi.username');
      $password = config('services.bitbucket.organi.password');

      Job::dispatch($username, $password);

      $username = config('services.bitbucket.personal.username');
      $password = config('services.bitbucket.personal.password');

      Job::dispatch($username, $password);
    }
}
