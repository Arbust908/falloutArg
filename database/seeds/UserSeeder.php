<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    User::create([
      'name' => 'Pancho',
      'email' => 'arb@arb.dev',
      'password' => password_hash('admindev', PASSWORD_DEFAULT),
      'remember_token' => str_random(10),
      ]);
    }
  }
  