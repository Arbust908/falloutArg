<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function skill()
    {
        return $this->hasMany('App\SKill');
    }
}
