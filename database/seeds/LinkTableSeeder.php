<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LinkTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $link = App\Link::create([
            'title' => 'Facebook',
            'icon' => 'fa-facebook',
            'href' => 'https://www.facebook.com/RobVanKeilegom',
            'target_blank' => true,
        ]);


        App\Link::create([
            'title' => 'LinkedIn',
            'icon' => 'fa-linkedin',
            'href' => 'https://www.linkedin.com/in/robvankeilegom/',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Bitbucket',
            'icon' => 'fa-bitbucket',
            'href' => 'https://bitbucket.org/RoobieBoobieee/',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Gitlab',
            'icon' => 'fa-gitlab',
            'href' => 'https://gitlab.com/RoobieBoobieee',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Github',
            'icon' => 'fa-github',
            'href' => 'https://github.com/RoobieBoobieee',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/tm_project2',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ProjectWebEngineering1',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Total_Dafi',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ObjectOrientedProgramming',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ProjectDatabanken',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/total_lab3',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Happening_RankedGame',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Portfolio',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/DBH_SolarTracker',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Project1',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Python',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/CodinGame_hackathon_The_Accountant',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Bot',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Log_Bot_Web',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'http://portfolio.robvankeilegom.be',
            'target_blank' => true,
        ]);

        App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'http://sns-productions.be',
            'target_blank' => true,
        ]);
    }
}
