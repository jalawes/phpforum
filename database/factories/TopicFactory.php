<?php

use App\User;
use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function(Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'title'   => $faker->realText(50, 2),
        'body'    => $faker->paragraphs(3, true),
    ];
});
