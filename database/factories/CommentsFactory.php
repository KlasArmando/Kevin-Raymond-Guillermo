<?php

use Faker\Generator as Faker;

$factory->define(App\comment::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'comment' => $faker->paragraph(20),
    ];
});
