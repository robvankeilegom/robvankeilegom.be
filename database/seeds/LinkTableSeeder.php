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
        $link = $link = App\Link::create([
            'title' => 'Facebook',
            'icon' => 'fa-facebook',
            'href' => 'https://www.facebook.com/RobVanKeilegom',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'LinkedIn',
            'icon' => 'fa-linkedin',
            'href' => 'https://www.linkedin.com/in/robvankeilegom/',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'Bitbucket',
            'icon' => 'fa-bitbucket',
            'href' => 'https://bitbucket.org/RoobieBoobieee/',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'Gitlab',
            'icon' => 'fa-gitlab',
            'href' => 'https://gitlab.com/RoobieBoobieee',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'Github',
            'icon' => 'fa-github',
            'href' => 'https://github.com/RoobieBoobieee',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'E-mail',
            'icon' => 'fa-envelope-o',
            'href' => 'mailto:robvankeilegom@hotmail.com',
            'target' => '_self',
        ]);
    }
}
