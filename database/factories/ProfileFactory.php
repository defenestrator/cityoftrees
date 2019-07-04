<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Profile;
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

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'uuid' => $faker->sentence(),
        'user_id' => random_int(1, 10),
        'facebook' => $faker->sentence(),
        'instagram' => $faker->sentence(),
        'twitter' => $faker->sentence(),
        'snapchat' => $faker->sentence(),
        'thcfarmer' => $faker->sentence(),
        'rollitup' => $faker->sentence(),
        '420mag' => $faker->sentence(),
        'leafly' => $faker->sentence(),
        'strainly' => $faker->sentence()
    ];
});