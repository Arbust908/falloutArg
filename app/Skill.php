<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stat;

class Skill extends Model
{
    public function stat()
    {
        return $this->belongsTo('App\Stat');
    }
}