<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Rob',
            'email' => 'RobVanKeilegom@hotmail.com',
            'password' => Hash::make('123'),
        ]);


    }
}
