<?php

use Illuminate\Database\Seeder;
use App\Stat;

class StatSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Stat::create([ //Strenght
    'slug' => str_slug('strenght'),
    'name' => 'Strenght',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Perception
    'slug' => str_slug('perception'),
    'name' => 'Perception',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Endurance
    'slug' => str_slug('Endurance'),
    'name' => 'Endurance',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Charisma
    'slug' => str_slug('Charisma'),
    'name' => 'Charisma',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Inteligence
    'slug' => str_slug('Inteligence'),
    'name' => 'Inteligence',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Agility
    'slug' => str_slug('Agility'),
    'name' => 'Agility',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);
    Stat::create([ //Luck
    'slug' => str_slug('Luck'),
    'name' => 'Luck',
    'description' => '',
    'effect' => '',
    'img' => '',
    'status' => 1,
    ]);

  }

}
/*
|------------------------------------------------------------
| *** S.P.E.C.I.A.L. ***
|------------------------------------------------------------
| Strength    ***
| Perception  ***
| Endurance   ***
| Charisma    ***
| Inteligence ***
| Agility     ***
| Luck        ***
|____________________________________________________________
*/