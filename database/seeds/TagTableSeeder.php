<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TagTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Spatie\Tags\Tag::findOrCreate('HTML');
        Spatie\Tags\Tag::findOrCreate('PHP');
        Spatie\Tags\Tag::findOrCreate('CSS');
        Spatie\Tags\Tag::findOrCreate('Javascript');
        Spatie\Tags\Tag::findOrCreate('JQuery');
        Spatie\Tags\Tag::findOrCreate('JQuery UI');
        Spatie\Tags\Tag::findOrCreate('ASP.NET');
        Spatie\Tags\Tag::findOrCreate('ASP.NET MVC');
        Spatie\Tags\Tag::findOrCreate('MySQL');
        Spatie\Tags\Tag::findOrCreate('MS-SQL');
        Spatie\Tags\Tag::findOrCreate('CoffeeScript');
        Spatie\Tags\Tag::findOrCreate('C++');
        Spatie\Tags\Tag::findOrCreate('Object Oriented');
        Spatie\Tags\Tag::findOrCreate('Python');
        Spatie\Tags\Tag::findOrCreate('Discord.PY');
        Spatie\Tags\Tag::findOrCreate('Excel');
        Spatie\Tags\Tag::findOrCreate('Visual Basic');
        Spatie\Tags\Tag::findOrCreate('Facebook API');
        Spatie\Tags\Tag::findOrCreate('Youtube API');
        Spatie\Tags\Tag::findOrCreate('KU Leuven API');
        Spatie\Tags\Tag::findOrCreate('Flickr API');
        Spatie\Tags\Tag::findOrCreate('C#');
        Spatie\Tags\Tag::findOrCreate('Ajax');
        Spatie\Tags\Tag::findOrCreate('Joomla!');
        Spatie\Tags\Tag::findOrCreate('CMS');
        Spatie\Tags\Tag::findOrCreate('Frag-o-Matic API');
        Spatie\Tags\Tag::findOrCreate('Hackaton');
        Spatie\Tags\Tag::findOrCreate('Bot');
        Spatie\Tags\Tag::findOrCreate('Google API');
        Spatie\Tags\Tag::findOrCreate('Laravel');
    }
}
