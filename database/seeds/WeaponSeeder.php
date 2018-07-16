<?php

use Illuminate\Database\Seeder;
use App\Weapon;

class WeaponSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    
    Weapon::create([
      'skill_id' => 1, //Guns
      'ammo_id' => 3, //.50 MG Ammo
      '100%' => '15dmg | 15%',
      '75%' => '10dmg | 20%',
      '50%' => '10dmg | 10%',
      '25%' => '5dmg | 10%',
      'melee' => 'Regular',
      'close' => 'High',
      'medium' => 'Regular',
      'long' => 'Low',
      'distant' => 'Very Low',
      ]);
      
    }
  }
  
// *** Levels by Area *** //
//                        //
//       Auto Hit         //
//       Very High        //
//       High             //
//       Regular          //
//       Low              //
//       Very Low         //
//       Imposible        //
//                        //
// *** Levels by Area *** //

