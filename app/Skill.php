<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function stat()
    {
        return $this->belongsTo('App\Stat');
    }
}