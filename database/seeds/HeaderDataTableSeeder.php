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
            'title' => 'Hallo!',
            'description' => 'Mijn naam is Rob Van Keilegom, ik ben een 3de jaars student aan Thomas More: Campus De Nayer. Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.'
        ]);

        $links = [
            'LinkedIn',
            'Github',
            'Gitlab',
            'Bitbucket',
            'E-mail',
        ];

        $links = App\Link::whereIn('title', $links)->get();
        $headerData->links()->attach($links);
    }
}
