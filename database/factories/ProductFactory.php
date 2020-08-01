<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Product;
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
        'uuid' => $faker->uuid(),
        'manufacturer_id' => factory(Cot\Manufacturer::class)->create(),
        'vendor_id' => factory(Cot\Vendor::class)->create(),
        'name' => $faker->name(),
        'description' => $faker->realText(),
        'stock' => random_int(0, 200),
        'height' => random_int(0, 200),
        'width' => random_int(0, 200),
        'depth' => random_int(0, 200),
        'weight' => random_int(0, 200),
        'volume' => random_int(0, 200),
        'contents' => $faker->realText(),
        'price' => random_int(0, 200)
    ];
});
