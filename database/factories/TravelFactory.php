<?php

use Faker\Generator as Faker;

$factory->define(App\Travelad::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'title' => $faker->paragraph(1),
        'description' => $faker->paragraph(20),
    ];
});
