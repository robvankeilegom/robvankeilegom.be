<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use RoobieBoobieee\Bitbucket\Jobs\SyncBitbucket;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $username = config('services.bitbucket.organi.username');
      $password = config('services.bitbucket.organi.password');

      $schedule->job(SyncBitbucket::dispatch($username, $password))->everyFifteenMinutes();

      $username = config('services.bitbucket.personal.username');
      $password = config('services.bitbucket.personal.password');

      $schedule->job(SyncBitbucket::dispatch($username, $password))->everyFifteenMinutes();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
        $this->load(__DIR__.'/Commands');
    }
}
