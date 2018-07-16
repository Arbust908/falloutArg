<?php

use Faker\Generator as Faker;
/*
|---------------------------------------------------------------------
| Rarity Factories || Factorias de Rareza
|---------------------------------------------------------------------
| La idea es tener la base para rarezas. Igual las rarezas no deberian
| cambiar mucho, por lo que creo que van a estar echas por seed.
|
*/

$factory->define(App\Rarity::class, function (Faker $faker) {
  $name = $faker->name();
  return [
    'slug' => str_slug($name),
    'name' => $name,
    'description' => $faker->sentences(rand(1, 3), true),
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => $faker->name(),
    'status' => 1,
  ];
});
