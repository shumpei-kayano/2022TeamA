<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Good;
use Auth;
use App\Models\User;
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
        $tests=['goods'=>$goods,'reviews'=>$reviews];
        return view('review.admin',$tests);
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
