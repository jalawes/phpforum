<?php

use App\Topic;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Reply::class, function(Faker $faker) {
    return [
        'topic_id' => Topic::all()->random()->id,
        'user_id'  => User::all()->random()->id,
        'body'     => $faker->paragraph(4, true),
    ];
});
