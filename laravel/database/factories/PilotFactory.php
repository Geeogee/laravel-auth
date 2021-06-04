<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pilot;
use Faker\Generator as Faker;

$factory->define(Pilot::class, function (Faker $faker) {

    $gender = $faker -> randomElement(['male','female']);

    return [
        'firstname' => $faker -> firstName($gender),
        'lastname' => $faker -> lastName,
        'nationality' => $faker -> country,
        'date_of_birth' => $faker -> date($format = 'Y-m-d', $max = 'now')
    ];
});
