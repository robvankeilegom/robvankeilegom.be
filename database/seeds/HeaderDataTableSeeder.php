<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HeaderDataTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $headerData = App\HeaderData::create([
            'code' => 'MAIN',
            'image' => 'images/profile_picture.jpg',
            'subtitle' => 'Full Stack Developer',
            'description1' => 'Mijn naam is Rob Van Keilegom, ik ben een 3de jaars student aan Thomas More: Campus De Nayer. Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.',
            'description2' => '',
        ]);

        $links = [
            'LinkedIn',
            'Github',
            'Gitlab',
            'Bitbucket',
            'Facebook',
        ];

        $links = App\Link::whereIn('title', $links)->get();
        $headerData->links()->attach($links);
    }
}
