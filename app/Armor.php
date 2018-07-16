<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\Item;

class Armor extends Model{
  
  public function item(){
    return $this->morphToMany('App\Item', 'itemable');
  }
  
  public function requiement(){
    return $this->hasOne('App\Skill');
  }

}
