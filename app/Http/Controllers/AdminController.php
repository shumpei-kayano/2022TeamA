<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Good;
use App\Review;
use App\Ticket;
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
        $tickets = DB::table('tickets')
        ->where('flg','=', '1')
        ->count();
        return view('coupon.admin',['tickets'=>$tickets]);
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
        $reviews = Review::selectRaw('COUNT(user_id) as count_review')
        ->get();
        $goods=Good::where('user_id','=','3')->get();
        return view('review.admin',['goods'=>$goods],['reviews'=>$reviews]);
    }

}
