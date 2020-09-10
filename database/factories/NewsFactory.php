<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
Use App\User;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'content' => $faker->sentence(20),
       
    ];
});
