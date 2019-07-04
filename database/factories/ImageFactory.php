<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Image;
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
        'uuid' => $faker->sentence(),
        'imageable_id' => random_int(0, 9223372036854775807),
        'imageable_type' => $faker->sentence(),
        'large' => $faker->sentence(),
        'medium' => $faker->sentence(),
        'small' => $faker->sentence(),
        'square' => random_int(-2147483648, 2147483647),
        'original' => $faker->sentence()
    ];
});
