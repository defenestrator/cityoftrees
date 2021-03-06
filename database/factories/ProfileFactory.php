<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Cot\Profile;
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
        'uuid' => $faker->uuid(),
        'user_id' => factory(Cot\User::class)->create(),
        'screen_name' => $faker->sentence(),
        'title' => $faker->words(3, true),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'avatar' => "https://picsum.photos/400/400",
        'phone' => $faker->sentence(),
        'facebook' => $faker->sentence(),
        'instagram' => $faker->sentence(),
        'twitter' => $faker->sentence(),
        'snapchat' => $faker->sentence(),
        'thcfarmer' => $faker->sentence(),
        'rollitup' => $faker->sentence(),
        'four20mag' => $faker->sentence(),
        'leafly' => $faker->sentence(),
        'strainly' => $faker->sentence()
    ];
});
