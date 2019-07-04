<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Coupon;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        'percentage' => random_int(-2147483648, 2147483647),
        'value' => $faker->realText(),
        'code' => $faker->sentence(),
        'expires' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});
