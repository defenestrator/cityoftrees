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
        'percentage' => $faker->boolean(),
        'value' => random_int(0, 4294967295),
        'code' => $faker->sentence(),
        'expires' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});
