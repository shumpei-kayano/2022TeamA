<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
class AdminController extends Controller
{
    public function watch(){
        return view('welcome.admin');
    }
    public function in(){
        return view('welcome.admin');
    }
    public function enter(){
        
    }
    public function show(){
        return view('store.admin');
    }
    public function edit(){
        return view('store.admin');
    }
    public function update(){
        
    }
    public function look(){
        return view('coupon.admin');
    }
    public function see(){
        return view('coupon.admin');
    }
    public function rewrite(){
        return view('coupon.admin');
    }
    public function set(){
        
    }
    public function add(){
        return view('coupon.admin');
    }
    public function create(){
        
    }
    public function view(){
        $goods=Good::where('user_id','=','3')->get();
        return view('review.admin',['goods'=>$goods]);
    }

}
