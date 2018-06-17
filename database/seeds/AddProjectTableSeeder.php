<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class AddProjectTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $project = App\Project::create([
            "title" => "bes.robvankeilegom.be",
            "description" => "",
            "tumbnail_image" => "images/projects/bes.robvankeilegom.be_thumb.png",
            "image" => "images/projects/bes.robvankeilegom.be.png",
        ]);

        $project
           ->setTranslation('description', 'en', "Another project I did to get familiar with the Angular framework. Without getting in to much detail. You can enter data about your cars gearbox and the application will calculate the cars max speed at a certain rPM.")
           ->setTranslation('description', 'nl', "Nog een project dat ik heb gedaan om gewoon te worden aan het Angular framework. Zonder in te veel detail te gaan. Op de website kan je data ingeven over de versnellingsbak van je auto. De applicatie berekend dan de maximum snelheid die je zal halen voor een bepaald toerental.")
           ->save();

        $project->attachTags(['Angular', 'HTML', 'SASS', 'Javascript', 'JQuery', 'Typescript', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/bes.robvankeilegom.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $link = App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'https://bes.robvankeilegom.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "hoeveelfilestaater.be",
            "highlight" => "newest",
            "description" => "",
            "tumbnail_image" => "images/projects/hoeveelfilestaater.be_tumb.png",
            "image" => "images/projects/hoeveelfilestaater.be.png",
        ]);

        $project
           ->setTranslation('description', 'en', "A project I did to get comfortable with the Angular framework. It displays live data of traffic jams in Belgium and a graph to check out data in the past. This is just a front-end shell that pulls data from an API via AJAX calls. ")
           ->setTranslation('description', 'nl', "Een project dat ik gedaan heb om gewoon te worden met het Angular framework. De website geeft live data weer over de files in Belgie. Ook is er een grafiek waar je data uit het verleden op kan weergeven. Dit is enkel een front-end schil. De data wordt uit een API getrokken via AJAX calls.")
           ->save();

        $project->attachTags(['Angular', 'HTML', 'SASS', 'Javascript', 'JQuery', 'Typescript', 'RXJS', 'API', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/hoeveelfilestaater.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $link = App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'https://hoeveelfilestaater.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "api.hoeveelfilestaater.be",
            "description" => "",
            "tumbnail_image" => "images/projects/hoeveelfilestaater.be_tumb.png",
            "image" => "images/projects/hoeveelfilestaater.be.png",
        ]);

        $project
           ->setTranslation('description', 'en', "The API for hoeveelfilestaater.be is build on top of the Laravel framework. Every 5 minutes it pulls data from touringmobilis.be. The data is then stored in a database and every night the data from the past day is processed. Averages, minimums and maximums are calculated and stored in another table. This data is made public through 2 endpoints which are consumed by the Angular application.")
           ->setTranslation('description', 'nl', "De API voor hoeveelfilestaater.be is gebouwd bovenop het Laravel framework. Elke 5 minuten wordt er data getrokken van touringmobilis.be. Deze data wordt opgeslagen in een database. Elke nacht wordt de data van de afgelopen dag verwerkt. Gemiddeldes, minima en maxima worden berekend en opgeslagen in een andere tabel. Deze data wordt beschikbaar gesteld door 2 endpoints die aangesproken worden door de Angular applicatie.")
           ->save();

        $project->attachTags(['PHP', 'Laravel', 'API', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/api.hoeveelfilestaater.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);
    }
}
