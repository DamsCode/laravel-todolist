<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'password' => $faker->password,
        'email' => $faker->email,
    ];
});
