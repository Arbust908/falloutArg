<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    // ***     Ammo Items     *** //
    Item::create([ //9mm Ammo
      'slug' => str_slug('9mm round'),
      'name' => '9mm round',
      'weight' => 1,
      'rarity_id' => '2',
      'description' => 'The 9mm is a medium caliber auto-pistol round, suitable for use in handguns and submachine guns.',
      'effect' => 'Munition for weapons',
      'img' => 'storage/ammo/img/9mm_ammo.png',
      'status' => 1,
      'itemable_id' => 1,
      'itemable_type' => 'ammo',
    ]);
    Item::create([ //20 Gauge Shell Ammo
      'slug' => str_slug('20 gauge'),
      'name' => '20 gauge shell',
      'weight' => 2,
      'rarity_id' => '2',
      'description' => 'Low recoil/max power 20 gauge shotgun shells are very similar to their larger, better known cousins, 12 gauge shotgun shells. Smaller in bore size, they have lighter powder loads and a smaller amount of shot, resulting in lower recoil and reduced target effect.',
      'effect' => 'Munition for weapons',
      'img' => 'storage/ammo/img/20_gauge_shell_ammo.png',
      'status' => 1,
      'itemable_id' => 2,
      'itemable_type' => 'ammo',
    ]);
    Item::create([ //.50 MG Ammo
      'slug' => str_slug('.50 MG'),
      'name' => '.50 MG',
      'weight' => 4,
      'rarity_id' => '3',
      'description' => 'The .50 MG is a large caliber heavy machine gun and long-range anti-materiel rifle round. It is the largest, most expensive, and heaviest conventional Guns ammunition in the waste.',
      'effect' => 'Munition for weapons',
      'img' => 'storage/ammo/img/50mg_ammo.png',
      'status' => 1,
      'itemable_id' => 3,
      'itemable_type' => 'ammo',
    ]);
    Item::create([ //Mini nuke Ammo
      'slug' => str_slug('Mini nuke'),
      'name' => 'Mini nuke',
      'weight' => 8,
      'rarity_id' => '4',
      'description' => 'Mini nukes are shaped like the WWII atomic bomb "Fat Man." Their explosion is powerful, causing a characteristic mushroom cloud and leaving residual radioactivity. Due to their rarity and effectiveness, mini nukes are the most valuable ammunition type in the Waste.',
      'img' => 'storage/ammo/img/mininuke_ammo.png',
      'effect' => 'Munition for weapons & Throwable. 40dmg plus 25 rads. Leaves and AOE of 2 zones for 3 rounds os 25 rads.',
      'status' => 1,
      'itemable_id' => 4,
      'itemable_type' => 'ammo',
    ]);
    // *** Non-Itemable Items *** //
    Item::create([ //Stimpak
      'slug' => str_slug('Stimpak'),
      'name' => 'Stimpak',
      'weight' => 1,
      'rarity_id' => '3',
      'description' => "Stimpak, or stimulation delivery package, is a type of hand-held medication used for healing the body. This item consists of a syringe for containing and delivering the medication and a gauge for measuring the status of the stimpak' s contents .",
      'img' => 'storage/ammo/img/mininuke_ammo.png',
      //http: //lorempixel.com/800/400/cats/Faker
      'effect' => 'Heals 5hp plus 1hp per 5 sience points.',
      'status' => 1,
      'itemable_id' => null,
      'itemable_type' => null,
    ]);
    // *** Non-Itemable Items *** //
    Item::create([ //Ranger Sequoia
      'slug' => str_slug('Ranger Sequoia'),
      'name' => 'Ranger Sequoia',
      'weight' => 2,
      'rarity_id' => '4',
      'description' => 'This large, double-action revolver is a rare, scopeless variant of the hunting revolver. It is used exclusively by the New California Republic Rangers, and is carried only by a NCR Veteran Ranger after 20 years of service. This revolver features a dark finish with intricate engravings etched all around the weapon. Engraved along the barrel are the words " for Honorable Service, " and " Against All Tyrants . " The hand grip bears the symbol of the NCR Rangers, a bear, and a brass plate attached to the bottom that reads " 20 Years.',
      'img' => 'http: //lorempixel.com/600/600/cats/',
      'effect' => 'A Weapon to be used',
      'status' => 1,
      'itemable_id' => 1,
      'itemable_type' => 'weapon',
    ]);
    // *** Non-Itemable Items *** //
    Item::create([ //Ranger combat armor
      'slug' => str_slug('Ranger combat armor'),
      'name' => 'Ranger combat armor',
      'weight' => 6,
      'rarity_id' => '4',
      'description' => "A military-grade armor originally used by L.A.P.D. riot squads, this combat outfit is typically worn with a matching military helmet with built-in low light optics, a combination IR/white light lamp and gas mask.[1] It is worn with the Desert Rangers style duster (with the NCR Rangers' insignia on the left flap ) and a set of rodeo jeans .",
      'img' => 'http: //lorempixel.com/600/600/cats/',
      'effect' => 'An armor tu use',
      'status' => 1,
      'itemable_id' => 1,
      'itemable_type' => 'armor',
    ]);



  }
}
