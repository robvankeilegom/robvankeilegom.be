<?php

use Illuminate\Database\Seeder;

class HeaderDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $headerData = App\Models\HeaderData::where('code', 'MAIN')->first();

        if (! $headerData) {
            $headerData = new App\Models\HeaderData();
        }

        $headerData->code         = 'MAIN';
        $headerData->image        = 'images/profile_picture.jpg';
        $headerData->subtitle     = 'Full Stack Developer - Software Engineer';
        $headerData->description1 = "My name is Rob. I'm a 24 year old developer graduated in June 2017 with a bachelor's degree in Networks, Systems and Security. I currently work as a Progress developer at Organi (Wilrijk, Belgium). In my free time I work on personal or open source projects. When I'm not programming I'm probably busy volunteering at Frag-o-Matic, playing video- and boardgames or out snowboarding.";
        $headerData->description2 = "Even though I don't have that many years of work experience it doesn't mean I've not been busy. Programming is my passion as you can see by the many projects I've worked on: lots of projects in different languages. I love experimenting which is why some projects are unfinished. As I see it, it's not about the destination but about the experience gained.";

        $headerData->save();

        $links = [
            'LinkedIn',
            'Github',
            'Gitlab',
        ];

        $links = App\Models\Link::whereIn('title', $links)->get();
        $headerData->links()->detach();
        $headerData->links()->attach($links);
    }
}
