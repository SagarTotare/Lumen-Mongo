<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\Collections\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'mobile' => mt_rand(7000000000, 9999999999),
        'email' => $faker->email
    ];
});

$factory->define(App\Collections\Post::class, function (Faker\Generator $faker) {
    $users = array(
        "5d53fd6414337529300033d2",
        "5d53fd6514337529300033d3",
        "5d53fd6514337529300033d4",
        "5d53fd6514337529300033d5",
        "5d53fd6514337529300033d6",
        "5d53fd6514337529300033d7",
        "5d53fd6514337529300033d8",
        "5d53fd6514337529300033d9",
        "5d53fd6514337529300033da",
        "5d53fd6514337529300033db"
    );

    return [
        'title' => $faker->sentence(4),
        'content' => $faker->paragraph(4),
        'user_id' => $users[mt_rand(0, 9)]
    ];
});

$factory->define(App\Collections\Comment::class, function (Faker\Generator $faker) {
    $users = array(
        "5d53fd6414337529300033d2",
        "5d53fd6514337529300033d3",
        "5d53fd6514337529300033d4",
        "5d53fd6514337529300033d5",
        "5d53fd6514337529300033d6",
        "5d53fd6514337529300033d7",
        "5d53fd6514337529300033d8",
        "5d53fd6514337529300033d9",
        "5d53fd6514337529300033da",
        "5d53fd6514337529300033db"
    );

    $posts = array(
        "5d53fd6514337529300033dc",
        "5d53fd6514337529300033dd",
        "5d53fd6514337529300033de",
        "5d53fd6514337529300033df",
        "5d53fd6514337529300033e0",
        "5d53fd6514337529300033e1",
        "5d53fd6514337529300033e2",
        "5d53fd6514337529300033e4",
        "5d53fd6514337529300033e5",
        "5d53fd6514337529300033e6"
    );

    return [
        'content' => $faker->paragraph(1),
        'post_id' => $posts[mt_rand(0, 9)],
        'user_id' => $users[mt_rand(0, 9)]
    ];
});

/* $factory->define(App\Collections\User::class, function (Faker\Generator $faker) {
    $hasher = app()->make('hash');
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $hasher->make("secret")
    ];
}); */
