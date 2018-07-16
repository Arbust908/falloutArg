<?php

use Illuminate\Database\Seeder;
use App\Rarity;

class RaritySeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Rarity::create([
      'slug' => str_slug('poor'),
      'name' => 'Poor',
      'description' => "Even in the wasteland this is a low quiality item. Maybe because it's makeshift or mabye because is just junk.",
      'img' => '/img/FoT_Bend_the_Rules.png',
      'color' => 'grey',
      'status' => 1,
    ]);
    Rarity::create([
    'slug' => str_slug('common'),
    'name' => 'Common',
    'description' => "The wasteland is full of odds and ends, this is one more in the bunch. A mundane thing to have and find. Still very useful.",
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => 'yellow',
    'status' => 1,
    ]);
    Rarity::create([
    'slug' => str_slug('uncommon'),
    'name' => 'Uncommon',
    'description' => "It may be becuase someine tinker with it or because it's scarse where you are. But this is a good find.",
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => 'blue',
    'status' => 1,
    ]);
    Rarity::create([
    'slug' => str_slug('rare'),
    'name' => 'Rare',
    'description' => "Defenitly lucky of you to find this. A rare find that may get some killed and some in a long journy.",
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => 'green',
    'status' => 1,
    ]);
    Rarity::create([
    'slug' => str_slug('exotic'),
    'name' => 'Exotic',
    'description' => "One of a kind. A couple maybe more died for this. You will be next. Could be a Pre-War weapon, a special type of meat or someother type or rarity.",
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => 'orange',
    'status' => 1,
    ]);
    Rarity::create([
    'slug' => str_slug('legendary'),
    'name' => 'Legendary',
    'description' => "Are your eyes fooling you? This is something of legends. Your GranPa maybe told you a story of some lone wanderer that had it with him when your GranPa was a boy. A pre-war tecnological marvle in presteam condition and even maybe modified by a science guru.",
    'img' => '/img/FoT_Bend_the_Rules.png',
    'color' => 'purple',
    'status' => 1,
    ]);


  }
  
}
/*
| *** Rarity Levels *** |
| Poor -> (grey)        |
| Common -> (yellow)    |
| Uncommon -> (blue)    |
| Rare -> (green)       |
| Exotic -> (orange)    |
| Legendary -> (purple) |
| *** Rarity Levels *** |
*/