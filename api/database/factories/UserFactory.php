<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'lastname'          => $faker->lastName,
        'firstname'         => $faker->firstName,
        'phone'             => $faker->phoneNumber,
        'gender_id'         => $faker->numberBetween($min = 1, $max = 2),
        'locale_id'         => $faker->numberBetween($min = 1, $max = 2),
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => Hash::make('secret'),
        'remember_token'    => Str::random(10),
        'status'            => 'completed',
    ];
});
