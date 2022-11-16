<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function store(){
        return $this->belongsTo('App\Store');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
