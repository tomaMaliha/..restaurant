<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Manu;
use Faker\Generator as Faker;

$factory->define(Manu::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'description' => $faker -> paragraphs(2,true),
        'price' => $faker ->numberBetween(99 , 999),
        ];
});
