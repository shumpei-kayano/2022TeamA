<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function tickets(){
        return $this->hasmany('App\Ticket');
    }
}
