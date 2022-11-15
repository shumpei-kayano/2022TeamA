<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // protected $fillable = [
    //     'store_id', 'store_name'
    // ];

    public function tickets(){
        return $this->hasmany('App\Ticket');
    }
}
