<?php

use Illuminate\Database\Seeder;
use App\Ammo;
use App\Armor;
use App\Item;
use App\Npc;
use App\Player;
use App\Rarity;
use App\Skill;
use App\Stat;
use App\User;
use App\Weapon;

class DatabaseSeeder extends Seeder{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run(){
    $this->call(UserSeeder::class);
    $this->call(RaritySeeder::class);
    $this->call(ItemSeeder::class);
    $this->call(AmmoSeeder::class);
    $this->call(StatSeeder::class);
    $this->call(SkillSeeder::class);
    $this->call(WeaponSeeder::class);
    $this->call(ArmorSeeder::class);

    //factory('App\Rarity',100)->create();
    // $this->call(UsersTableSeeder::class);
  }
}

/*
public function run(){
  $this->call(BaseData::class);
  
  $users = factory(App\User::class, 50)->create();
  
  $categories = Category::All()->each(function($category){
    factory(App\Product::class, rand(12,35))->create([
      'categories_id' => $category->id,
      ]);
    });
    
    $jobs = factory(App\Job::class, 5)->create();
    
    $review = factory(App\Review::class, 50)->create();
    
    $this->call(CartSeeder::class);
    
    // $carts = factory(App\Cart::class, 1000)->create();
    //
    // foreach ($users as $user) {
      //   $user->review()->sync($review->random(3));
      // }
    }*/