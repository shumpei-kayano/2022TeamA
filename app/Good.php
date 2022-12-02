<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{

    public function review(){
        return $this->belongsTo('App\Review');
    }

    protected $fillable = ['review_id','user_id'];
}
