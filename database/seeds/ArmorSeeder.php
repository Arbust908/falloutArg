<?php

use Illuminate\Database\Seeder;
use App\Armor;

class ArmorSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //
    Armor::create([
      'skill_id' => 1, //Guns *** Hay que ver si queda SKill o stat
      'requirement' => '50%',
      '100%' => '30DR | 30RR +10 Guns',
      '75%' => '25DR | 20RR +10 Guns',
      '50%' => '25DR | 15RR +5 Guns',
      '25%' => '10DR | 5RR +5 Guns',
      ]);
      
    }
  }
  