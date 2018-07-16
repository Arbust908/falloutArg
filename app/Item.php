<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;


Relation::morphMap([
  'weapon' => 'App\Weapon',
  'armor' => 'App\Armor',
  'ammo' => 'App\Ammo',
]);

class Item extends Model{

/*
------------------------------------------------
|| *** Atributos *** ||
------------------------------------------------
| increments('id');
| string('slug');
|
| string('name');
| integer('weight');
|
| integer('rarity_id');
| text('description');
| string('effect');
| string('img');
|
| integer('status');
|
| integer('itemable_id');
| string('itemable_type');
|
| timestamps();
*/

  public function rarity(){
    return $this->belongsTo('App\Rarity');
  }
  
  public function owners(){
    return $this->belongsToMany('App\Npc');
  }

  public function itemable(){
    return $this->morphTo();
  }
  
}
