<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Rarity extends Model{

    public function item(){
        return $this->hasMany('App\Item');
    }

}
