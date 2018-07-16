<?php

use Illuminate\Database\Seeder;
use App\Npc;

class NpcSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //
    Npc::create([ //NCR Ranger
      'slug' => str_slug('NCR Ranger'),
      'name' =>'NCR Ranger',
      'health' =>'34',
      'damage_reduction' =>'55',
      'img' => 'http: //lorempixel.com/600/600/cats/',
      'status' =>1,
    ]);

  }
}
