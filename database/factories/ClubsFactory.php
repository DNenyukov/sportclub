<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clubs;
use Faker\Generator as Faker;

$factory->define(Clubs::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'img' => $faker->imageUrl(640, 480),
        'adress' => $faker->address,
        'info' => $faker->text
    ];
});
