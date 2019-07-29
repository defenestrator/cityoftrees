<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\PaymentMethod;
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

$factory->define(PaymentMethod::class, function (Faker $faker) {
    return [
        'payment_method_type_id' => random_int(1, 10),
        'user_id' => random_int(1, 10),
        'nickname' => $faker->sentence(),
        'account' => $faker->sentence(),
        'expires' => $faker->dateTimeBetween('-30 years', 'now'),
        'secret' => $faker->sentence(),
        'postcode' => $faker->sentence()
    ];
});
