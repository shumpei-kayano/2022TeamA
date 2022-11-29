<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_id', 'store_name','address','link','tel','service','picture1','picture2','picture3','parking','area_id','perfecture_id', 'latitude','longitude','review_count','star','end_time','start_time','related1','related2','related3'
    ];

    public function tickets(){
        return $this->hasmany('App\Ticket');
    }
    public function coupons(){
        return $this->hasmany('App\Coupon');
    }
    public function reviews(){
        return $this->hasmany('App\Review');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
}
