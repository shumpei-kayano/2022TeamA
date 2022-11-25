<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // static $rules = [
    //     'id' => 'required',
    //     'user_id' => 'required',
    //     'visited' => 'required',
    //     'comment' => 'required',
    //     'store_id' => 'required',
    //     'posted_date' => 'required',
    // ];
    public function store(){
        return $this->belongsTo('App\Store');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function goods(){
        return $this->hasmany('App\Good');
    }
    // public static function reviewUpdate(Request $request)
    // {
    //     $review = review::find($request->id);
    //     $review->user_id   = $request->Auth::user()-id;
    //     $review->visited = $request->visited;
    //     $review->comment = $request->comment;
    //     $review->store_id   = $request->store_id;
    //     $review->posted_date  = $request->posted_date;
    //     $review->save();
    // }

    protected $fillable=['user_id','visited','comment','store_id','posted_date','star'];
}
