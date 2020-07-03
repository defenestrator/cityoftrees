<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Shipment;
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

$factory->define(Shipment::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid(),
        'shipping_method' => $faker->word,
        'shipped_on_date' => $faker->dateTimeBetween('-30 years', 'now'),
        'received_on_date' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});
