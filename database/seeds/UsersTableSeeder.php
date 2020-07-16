<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = \App\User::create([
           'name' => 'Maliha',
           'email' => 'maliha@gmail.com',
           'password' => bcrypt('passward'),
       ]);

       $user->restaurent()->create([
           'name' => 'Maliha Tabassum',
           'location' => 'Dhaka, Bangladesh',
       ]);

       $user->restaurent()->create([
        'name' => 'JAmil Tabassum',
        'location' => 'Dhaka, Bangladesh',
    ]);
    }
}
