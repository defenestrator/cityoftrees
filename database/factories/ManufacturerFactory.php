<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Manufacturer;
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

$factory->define(Manufacturer::class, function (Faker $faker) {
    return [
        'uuid' => $faker->sentence(),
        'name' => $faker->name(),
        'phone' => $faker->sentence(),
        'contact_email' => $faker->sentence(),
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
