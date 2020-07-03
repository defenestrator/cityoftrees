<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Subscription;
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

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        'shipping_address_id' => factory(Cot\ShippingAddress::class)->create(),
        'frequency' => $faker->sentence(),
        'active' => $faker->boolean()
    ];
});
