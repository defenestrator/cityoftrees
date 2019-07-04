<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'uuid' => $faker->sentence(),
        'manufacturer_id' => random_int(1, 10),
        'vendor_id' => random_int(1, 10),
        'name' => $faker->name(),
        'description' => $faker->realText(),
        'height' => random_int(-2147483648, 2147483647),
        'width' => random_int(-2147483648, 2147483647),
        'depth' => random_int(-2147483648, 2147483647),
        'price' => $faker->randomFloat()
    ];
});
