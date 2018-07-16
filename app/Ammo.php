<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ammo extends Model{

  public function weapons(){
    return $this->belongsToMany('App\Weapon');
  }
  public function item(){
    return $this->morphToMany('App\Item', 'itemable');
  }

}
