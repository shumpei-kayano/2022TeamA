<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // public function getData()
    // {
    //     return $this->store_id;
    // }

    public function store(){
        return $this->belongsTo('App\Store');
    }
    public function coupon(){
        return $this->belongsTo('App\Coupon');
    }
}
