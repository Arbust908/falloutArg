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
      'clip-size' => '10',
      'use-die' => 'd10',
    ]);
    Ammo::create([ //20 Gauge Shell Ammo
      'clip-size' => '2',
      'use-die' => 'd6',
    ]);
    Ammo::create([ //.50 MG Ammo
      'clip-size' => '12',
      'use-die' => 'd12',
    ]);
    Ammo::create([ //Mini nuke Ammo
      'clip-size' => '1',
      'use-die' => 'd4',
    ]);

  }
}
