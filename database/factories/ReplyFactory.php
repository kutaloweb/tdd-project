<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'thread_id' => function () {
            return factory(App\Thread::class);
        },
        'user_id' => function () {
            return factory(App\User::class);
        },
        'body'  => $faker->paragraph
    ];
});
