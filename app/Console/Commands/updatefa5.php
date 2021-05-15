<?php

namespace App\Console\Commands;

use App\Models\Link;
use Illuminate\Console\Command;

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
                'fa-facebook' === $link->icon
                || 'fa-linkedin' === $link->icon
                || 'fa-gitlab' === $link->icon
                || 'fa-github' === $link->icon
                || 'fa-bitbucket' === $link->icon
            ) {
                $link->icon = 'fab ' . $link->icon;
            } else {
                $link->icon = 'fal ' . $link->icon;
            }
            $link->save();
        }
    }
}
