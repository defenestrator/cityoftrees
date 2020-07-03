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
        'height' => random_int(0, 4294967295),
        'width' => random_int(0, 4294967295),
        'depth' => random_int(0, 4294967295),
        'weight' => random_int(0, 4294967295),
        'volume' => random_int(0, 4294967295),
        'contents' => random_int(0, 4294967295),
        'price' => random_int(0, 4294967295)
    ];
});
