<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function get()
    {
    }
    public function see()
    {
        return view('coupon.index');
    }
    public function caution()
    {
    }
    public function use()
    {
    }
    public function review()
    {
        return view('post.index');
    }
    public function show()
    {
        // $stores = DB::table('stores')->get();
        // return view('coupon.index', compact('stores'));
        $tickets=Ticket::where('user_id','=','2')->get();
        // $cond = ['user_id' => 2, 'flg' =>0];
        // $tickets=Ticket::where($cond)->get();
        // dd($tickets);
        return view('coupon.index', ['tickets'=>$tickets]);
    }

    public function used()
    {
        $tickets=Ticket::where('user_id','=','3')->get();
        // $cond = ['user_id' => 2, 'flg' =>1];
        // $tickets=Ticket::where($cond)->get();
        return view('coupon.used', ['tickets'=>$tickets]);
    }

    public function store($id)
    {
        // $items = Store::where('id','=',$id)->get();
        $items = DB::table('stores')->find($id);
        return view('store.index', ['items' => $items]);
    }
    
    public function edit()
    {
        return view('post.index');
    }
}
