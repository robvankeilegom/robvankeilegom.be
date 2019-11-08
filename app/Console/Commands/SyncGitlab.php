<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RoobieBoobieee\Gitlab\Gitlab;
use Illuminate\Support\Facades\Cache;
use RoobieBoobieee\Gitlab\Jobs\SyncGitlab as SyncGitlabJob;

class SyncGitlab extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:gitlab';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync gitlab';

    /**
     * List of all password keys in the services config.
     *
     * @var array
     */
    private $keys = ['personal'];

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
        $glCount = 0;

        foreach ($this->keys as $key) {
            $username = config('services.gitlab.' . $key . '.username');
            $password = config('services.gitlab.' . $key . '.password');
            SyncGitlabJob::dispatch($username, $password);

            // Commits from above job will not be available yes, but hey that's alright
            $gl = new Gitlab($username, $password);
            $glCount += $gl->commits()->count();
        }

        Cache::forever('gl_count', $glCount);
    }
}
