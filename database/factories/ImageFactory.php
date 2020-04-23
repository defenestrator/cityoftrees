<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Image;
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

$factory->define(Image::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid(),
        'imageable_id' => $faker->numberBetween(1,2),
        'imageable_type' => 'Cot\Product',
        'large' => $faker->sentence(),
        'medium' => $faker->sentence(),
        'small' => $faker->sentence(),
        'square' => $faker->sentence(),
        'original' => $faker->sentence()
    ];
});
