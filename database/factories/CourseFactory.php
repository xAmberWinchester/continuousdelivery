<?php

//use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'Course' => $faker->name,
        'Grade' => $faker->numberBetween($min = 1, $max = 10),
        'Teacher' => $faker->name
    ];
});
