<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {
    return [
        'task' => $faker->sentence(6,true),
        'lists_id'=> $faker->numberBetween(1,9)

    ];
});
