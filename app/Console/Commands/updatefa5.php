<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Link;

class updatefa5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:fa5';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $links = Link::all();

        foreach ($links as $key => $link) {
            if (
                $link->icon === 'fa-facebook' ||
                $link->icon === 'fa-linkedin' ||
                $link->icon === 'fa-gitlab' ||
                $link->icon === 'fa-github' ||
                $link->icon === 'fa-bitbucket'
            ) {
                $link->icon = 'fab ' . $link->icon;
            } else {
                $link->icon = 'fal ' . $link->icon;
            }
            $link->save();
        }
    }
}
