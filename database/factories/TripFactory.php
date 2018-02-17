<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Trip::class, function (Faker $faker) {
	$n = User::count();

    return [
        "driver_id" => $faker->biasedNumberBetween(1, $n),
        "passenger_id" => $faker->biasedNumberBetween(1, $n),
        "from" => $faker->address,
        "to" => $faker->address,
        "time" => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
        "description" => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        "status" => $faker->biasedNumberBetween(0, 2),
    ];
});
