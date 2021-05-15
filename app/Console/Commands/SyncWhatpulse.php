<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class SyncWhatpulse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:whatpulse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Whatpulse';

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
        $client = new \GuzzleHttp\Client();

        try {
            $client   = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.whatpulse.org/user.php?user=roobieboobieee&format=json');

            if (200 == $response->getStatusCode()) {
                $whatpulse = json_decode($response->getBody());

                Cache::forever('whatpulse', $whatpulse);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
        }
    }
}
