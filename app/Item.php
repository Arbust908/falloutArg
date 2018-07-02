<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function rarity()
    {
        return $this->hasOne('App\Rarity');
    }
    public function owners()
    {
        return $this->belongsToMany('App\Npc');
    }
}
