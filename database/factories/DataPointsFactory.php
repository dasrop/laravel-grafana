<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Datapoint;
use Faker\Generator as Faker;

$factory->define(Datapoint::class, function (Faker $faker) {
    return [
        'name' => "temperature",
        'value' => $faker->randomFloat(0, 90),
        'cast' => "float",
    ];
});
