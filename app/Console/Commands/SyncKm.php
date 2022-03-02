<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class SyncKm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:km';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync hoeveelkmfilestaater.be';

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
            $response = $client->request('POST', 'https://api.hfse.robvankeilegom.be/api/getWelcomeMessage');

            if (200 == $response->getStatusCode()) {
                $km        = json_decode($response->getBody());
                $expiresAt = now()->addMinutes(5);

                Cache::put('km', $km, $expiresAt);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            //
        }
    }
}
