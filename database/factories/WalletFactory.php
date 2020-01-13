<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\wallet;
use Faker\Generator as Faker;

$factory->define(wallet::class, function (Faker $faker) {
    return [
        //
        'money'=>$faker->numberBetween($min=500,$max=900)
    ];
});
