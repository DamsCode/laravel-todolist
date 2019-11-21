<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lists;
use Faker\Generator as Faker;

$factory->define(Lists::class, function (Faker $faker) {
    return [
        'title' =>  $faker->sentence(3,true),
        'users_id'=> $faker->numberBetween(1,9)
    ];
});
