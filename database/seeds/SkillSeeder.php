<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //
    Skill::create([ //Guns
      'slug' => str_slug('Guns'),
      'name' => 'Guns',
      'description' => 'This skill is the base to using any gun.',
      'stat_id' => 2,
      'img' => 'http: //lorempixel.com/600/600/cats/',
      'status' => 1,
      ]);
      
    }
  }
  