<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\Skill;

class Weapon extends Model
{
  public function item(){
    return $this->morphToMany('App\Item', 'itemable');
  }
  
  public function skill(){
    return $this->hasOne('App\Skill');
  }

  public function ammo(){
    return $this->hasOne('App\Ammo');
  }

}

