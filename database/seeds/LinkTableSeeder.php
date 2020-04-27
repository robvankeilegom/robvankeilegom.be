<?php

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $link = App\Link::create([
            'title'  => 'Facebook',
            'icon'   => 'fab fa-facebook',
            'href'   => 'https://www.facebook.com/RobVanKeilegom',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title'  => 'LinkedIn',
            'icon'   => 'fab fa-linkedin',
            'href'   => 'https://www.linkedin.com/in/robvankeilegom/',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title'  => 'Bitbucket',
            'icon'   => 'fab fa-bitbucket',
            'href'   => 'https://bitbucket.org/RoobieBoobieee/',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title'  => 'Gitlab',
            'icon'   => 'fab fa-gitlab',
            'href'   => 'https://gitlab.com/RoobieBoobieee',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title'  => 'Github',
            'icon'   => 'fab fa-github',
            'href'   => 'https://github.com/RoobieBoobieee',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title'  => 'E-mail',
            'icon'   => 'fal fa-envelope',
            'href'   => 'mailto:robvankeilegom@hotmail.com',
            'target' => '_self',
        ]);
    }
}
