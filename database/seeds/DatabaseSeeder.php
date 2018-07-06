<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Ammo;

class DatabaseSeeder extends Seeder{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run(){
    $this->call(AmmoSeeder::class);
    $this->call(UserSeeder::class);
    factory('App\Ammo',10)->create();
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