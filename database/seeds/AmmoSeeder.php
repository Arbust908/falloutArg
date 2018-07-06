<?php

use Illuminate\Database\Seeder;
use App\Ammo;

class AmmoSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Ammo::create([ //9mm Ammo
      'slug' => '9mm',
      'name' => '9mm round',
      'weight' => 1,
      'description' => 'The 9mm is a medium caliber auto-pistol round, suitable for use in handguns and submachine guns. While significantly rarer in more northern places of the United States, the southern states of Nevada and Arizona do enjoy widespread use of 9mm chambered weapons, compared to the more powerful and popular but expensive 10mm round firearms.',
      'img' => 'storage/ammo/img/9mm_ammo.png',
      'status' => 1,
    ]);
    Ammo::create([ //20 Gauge Shell Ammo
      'slug' => str_slug('20 gauge'),
      'name' => '20 gauge shell',
      'weight' => 2,
      'description' => 'Masterson low recoil/max power 20 gauge shotgun shells are very similar to their larger, better known cousins, 12 gauge shotgun shells. Smaller in bore size, they have lighter powder loads and a smaller amount of shot, resulting in lower recoil and reduced target effect. 20 gauge shotshells consist of a plastic hull loaded with pistol powder and using multiple projectiles or a single slug.',
      'img' => 'storage/ammo/img/20_gauge_shell_ammo.png',
      'status' => 1,
    ]);
    Ammo::create([ //.50 MG Ammo
      'slug' => str_slug('.50 MG'),
      'name' => '.50 MG',
      'weight' => 4,
      'description' => 'The .50 MG is a large caliber heavy machine gun and long-range anti-materiel rifle round. It is the largest, most expensive, and heaviest conventional Guns ammunition in the game. The only weapons using it are the anti-materiel rifle and the GRA anti-materiel rifle. It has a weight of 0.25 pounds per round in Hardcore mode, the same weight as a 25mm grenade.',
      'img' => 'storage/ammo/img/50mg_ammo.png',
      'status' => 1,
    ]);
    Ammo::create([ //Mini nuke Ammo
      'slug' => str_slug('Mini nuke'),
      'name' => 'Mini nuke',
      'weight' => 8,
      'description' => 'Mini nukes are much less common in Fallout: New Vegas than in Fallout 3: there are only 14 in the base game (12 with the Wild Wasteland trait). They weigh 3 pounds each in Hardcore mode and are shaped like the WWII atomic bomb "Fat Man." Their explosion is powerful, causing a characteristic mushroom cloud and leaving residual radioactivity, initially 40 rads/sec., but which quickly drops to low levels that linger for quite a while. The Lonesome Road add-on introduces the possibility of mini nukes randomly spawning in duffle bags and other containers. Due to their rarity and effectiveness, mini nukes are the most valuable ammunition type in game.',
      'img' => 'storage/ammo/img/mininuke_ammo.png',
      'status' => 1,
    ]);
  }
}
