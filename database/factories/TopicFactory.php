<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->realText(50, 2),
        'body' => $faker->paragraph(4, true),
    ];
});
