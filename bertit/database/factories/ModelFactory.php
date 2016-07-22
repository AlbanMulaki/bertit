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

$factory->define(App\Comments::class, function (Faker\Generator $faker) {
    return [
        'ipaddress' => $faker->ipv4,
        'comments' => $faker->text,
        'likes' => rand(0, 10000),
    ];
});
