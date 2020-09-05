<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Datapoint;
use Faker\Generator as Faker;

$factory->define(Datapoint::class, function (Faker $faker) {
    return [
        'name' => "temperature",
        'value' => $faker->randomFloat(100, 0),
        'cast' => "float",
    ];
});
