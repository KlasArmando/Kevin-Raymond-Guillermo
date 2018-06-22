<?php

use Faker\Generator as Faker;

$factory->define(App\blog::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name,
        'description' => str_random(20),
        'content' => str_random(20),
        'youDescription' => str_random(20),
        'youNationality' => str_random(20),
        'youAge' => rand(),
        'user_id' => '3',
    ];
});

// factory(App\User::class, 50)->create()->each(function ($u) {
//         $u->posts()->save(factory(App\Post::class)->make());
//     });
