<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\ShippingAddress;
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

$factory->define(ShippingAddress::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid(),
        'user_id' => factory(Cot\User::class)->create(),
        'ship_to_name' => $faker->sentence(),
        'country' => $faker->sentence(),
        'street_address' => $faker->sentence(),
        'unit_number' => $faker->sentence(),
        'city' => $faker->sentence(),
        'state' => $faker->sentence(),
        'postal_code' => $faker->sentence(),
        'lat' => $faker->latitude(),
        'lng' => $faker->longitude()
    ];
});
