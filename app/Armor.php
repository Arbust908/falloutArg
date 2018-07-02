<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
    public function skill()
    {
        return $this->hasOne('App\Skill');
    }
    public function ammo()
    {
        return $this->hasOne('App\Ammo');
    }
}
