<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Invoice;
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

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'uuid' => $faker->sentence(),
        'user_id' => random_int(1, 10),
        'subtotal' => random_int(0, 4294967295),
        'tax' => random_int(0, 4294967295),
        'shipping' => random_int(0, 4294967295),
        'discount' => random_int(0, 4294967295),
        'total' => random_int(0, 4294967295)
    ];
});
