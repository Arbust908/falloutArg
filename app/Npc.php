<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Npc extends Model
{
    public function loot()
    {
        return $this->belongsToMany('App\Item');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }
}
