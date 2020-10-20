<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Treners;
use Faker\Generator as Faker;

$factory->define(Treners::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'employees position'=>$faker->jobTitle,
        'img' => $faker->imageUrl(640, 480),
        'info' => $faker->text
    ];
});
