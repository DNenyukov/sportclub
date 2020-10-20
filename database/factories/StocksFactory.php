<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Stocks;
use Faker\Generator as Faker;

$factory->define(Stocks::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'img' => $faker->imageUrl(640, 480),
        'info' => $faker->text,
        'validity period' => $faker->date,
    ];
});
