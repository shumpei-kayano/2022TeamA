<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function stores(){
        return $this->hasmany('App\Store');
    }
}
