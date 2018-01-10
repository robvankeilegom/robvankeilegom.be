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
            'description1' => "My name is Rob. I'm a 22 year old developer graduated in June 2017. I currently work as a Progress developer over at Organi (Wilrijk, Belgium). In my free time I work on personal or open source projects. When I'm not programming I'm probably busy volunteering at Frag-o-Matic, playing video- and boardgames or out snowboarding.",
            'description2' => "Even though I don't have that many years of work experience doesn't mean I've not been busy. Programming is my passion as you can see by the many projects I've worked on. Lots of projects in different languages. I love experimenting which is why some projects are unfinished. As I see it, its not about the destination but about the experience gained.",
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
