<?php

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
$factory->define(App\Ammo::class, function (Faker $faker) {
    $name = $faker->name();
    $slug = str_slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'weight' => $faker->randomDigitNotNull(),
        'description' => $faker->sentences(rand(1,3), true),
        'img' => '/img/FoT_Bend_the_Rules.png',
        'status' => rand(0,1),
    ];
});
