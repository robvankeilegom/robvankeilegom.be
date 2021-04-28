<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use RoobieBoobieee\Bitbucket\Bitbucket;
use RoobieBoobieee\Bitbucket\Jobs\SyncBitbucket as SyncBitbucketJob;

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
     * List of all password keys in the services config.
     *
     * @var array
     */
    private $keys = [
        'organi', 'personal',
    ];

    /**
     * Create a new command instance.
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
        $bbCount = 0;

        foreach ($this->keys as $key) {
            $username = config('services.bitbucket.' . $key . '.username');
            $password = config('services.bitbucket.' . $key . '.password');
            SyncBitbucketJob::dispatch($username, $password);

            // Commits from above job will not be available yes, but hey that's alright
            $bb = new Bitbucket($username, $password);
            $bbCount += $bb->commits()->count();
        }

        Cache::forever('bb_count', $bbCount);
    }
}
