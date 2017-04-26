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
        factory(App\Link::class, 6)->create();
    }
}
