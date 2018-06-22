<?php

use Faker\Generator as Faker;

$factory->define(App\shop::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->paragraph(20),
        'link' => $faker->paragraph(1),
    ];
});
