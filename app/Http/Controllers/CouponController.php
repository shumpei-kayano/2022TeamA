<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        // $id=Auth::id();
        // $tickets=Ticket::where('user_id','=',$id)->get();
        $id=Auth::id();
        $cond = ['user_id' =>$id , 'flg' =>0];
        $tickets=Ticket::where($cond)->get();
        // dd($tickets);
        return view('coupon.index', ['tickets'=>$tickets]);
        // $tickets = Ticket::where('user_id', '=', '1')->get();
        // return view('coupon.index', ['tickets' => $tickets]);
    }

    public function used()
    {
        // $tickets = Ticket::where('user_id', '=', '3')->get();
        $id=Auth::id();
        $cond = ['user_id' => $id, 'flg' =>1];
        $tickets=Ticket::where($cond)->get();
        return view('coupon.used', ['tickets' => $tickets]);
    }

    public function store($id)
    {
        //$items = Store::where('id', '=', $id)->get();
        $items = DB::table('stores')->find($id);
        return view('store.index', ['items' => $items]);
    }
public function view($store_id,$ticket_id){
    $id=Auth::id();
    // $items=['store_id'=>$store_id,'id'=>$id];
    // dd($items);
    Ticket::where('id','=',$ticket_id)->update([
        'flg'=>'1'
    ]);
    return view('post.index',['store_id'=>$store_id,'id'=>$id]);
}
    public function edit(Request $request)
    {
        $review=new review;
        $review->user_id=$request->user_id;
        $review->visited=$request->visited;
        $review->comment=$request->review;
        $review->store_id=$request->store_id;
        $review->posted_date=$request->posted_date;
        $review->star=$request->rate;
        // $review->reviewflg=1;
        $review->save();

        $cond=['user_id' => $request->user_id, 'store_id' =>$request->store_id];
        Ticket::where($cond)->update([
            'reviewflg'=>'1'
        ]);
        return redirect()->action('CouponController@used');
    }
    public function flg($id)
    {
        Ticket::where('id','=',$id)->update([
            'flg'=>'1'
        ]);
        return redirect('coupon/used');
    }
}
