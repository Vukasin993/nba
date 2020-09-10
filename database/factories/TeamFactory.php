<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->sentence(2),
        'email' => $faker->unique()->safeEmail,
    ];
});
