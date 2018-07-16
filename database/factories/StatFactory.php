<?php
/*
|----------------------------------------------------------------------
| Stat Factories
|---------------------------------------------------------------------
|
| 
| 
| 
|
*/

use Faker\Generator as Faker;

$factory->define(App\Stat::class, function (Faker $faker) {
    $name = $faker->name();
    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->sentences(rand(1, 3), true),
        'effect' => $faker->sentences(2, true),
        'img' => '/img/FoT_Bend_the_Rules.png',
        'status' => rand(0, 1),
    ];
});
