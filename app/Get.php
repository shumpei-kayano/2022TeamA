<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Get extends Model
{
    public function badge(){
        return $this->hasmany('App\Badge');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
