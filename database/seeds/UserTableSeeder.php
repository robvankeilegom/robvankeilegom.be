<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = App\Models\User::create([
            'name'     => 'Rob',
            'email'    => 'RobVanKeilegom@hotmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
