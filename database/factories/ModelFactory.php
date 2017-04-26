<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text,
        'tumbnail_image' => 'http://placekitten.com/500/280',
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'icon' => '',
        'href' => '#',
        'target_blank' => true,
    ];
});
