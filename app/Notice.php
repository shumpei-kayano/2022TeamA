<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public function alert(){
        return $this->belongsTo('App\Alert');
}
}

