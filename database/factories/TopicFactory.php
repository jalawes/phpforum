<?php

use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function(Faker $faker) {
    return [
        'title' => $faker->realText(50, 2),
        'body'  => $faker->paragraphs(3, true),
    ];
});
