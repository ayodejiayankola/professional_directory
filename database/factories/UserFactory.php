<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(\App\User::class, function (Faker $faker) {
    $states = ['Lagos', 'Ibadan', 'Abuja'];
    return [
        'name' => $faker->name,
        'business_name' => $faker->text(10),
        'service' => $faker->text(20),
        'business_address' => $states[array_rand($states)],
        'phone' => $faker->unique()->phoneNumber(11),
        'verification_code' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'phone_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10)



    ];
});
