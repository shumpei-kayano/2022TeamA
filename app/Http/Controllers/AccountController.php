<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function set(){
        return view('account.setting');
    }
    public function spot(){
        return view('tourist.index');
    }
    public function update(){
        $reviews=Review::where('user_id','=','2')->get();
        return view('review.person', ['reviews'=>$reviews]);

    }
    public function delete(){
        return view('review.edit');
    }
    public function remove(){
        return view('account/remove');
    }
    public function edit($id){
        // return view('review.edit');

        $reviews =  DB::table('reviews')->find($id);
        return view('review.edit', ['reviews' => $reviews]);
    }
    public function show(){
        return view('review.good');
    }
    public function good(){

    }
    public function see(){
        return view('account.index');
    }
    public function review(){
        return view('review.person');

    }
}
