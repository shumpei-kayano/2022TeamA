<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Good;
use Auth;

use App\Review;
class AdminController extends Controller
{
    public function watch(){
        return view('welcome.admin');
    }
    public function in(){
        return view('welcome.admin');
    }
    public function enter(){
        return view('store.admin');
    }
    public function show(){
        $reviews = Review::selectRaw('round(AVG(star)) as count_review')
        ->get();
        return view('store.admin',['reviews'=>$reviews]);
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
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admins.store');
    }
}
