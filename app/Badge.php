<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Get;
use app\User;


class Badge extends Model
{
    public function get(){
        return $this->belongsTo('App\Get');
    }
}
