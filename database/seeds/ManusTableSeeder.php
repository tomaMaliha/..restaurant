<?php

use Illuminate\Database\Seeder;

class ManusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Manu::class , 10)->create();
    }
}
