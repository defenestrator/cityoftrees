<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Payment;
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

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'uuid' => $faker->sentence(),
        'payment_method_id' => random_int(1, 10),
        'amount' => random_int(0, 4294967295)
    ];
});
