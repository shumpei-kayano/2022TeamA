<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Review;
use App\Get;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{

    public function see()
    {
        return view('coupon.index');
    }
    public function caution()
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

        $id=Auth::id();
        $cond=['user_id' =>$id, 'reviewflg'=>'1'];
        $reviews = DB::table('tickets')
        ->where($cond)
        ->count();
        // dd($reviews);
        // $item=['reviews'=>$reviews];
        // return redirect()->action('CouponController@used');

        switch($reviews){
            case 1:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=9;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 5:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=10;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 10:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=11;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 50:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=12;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
        }

       

        return redirect()->action('CouponController@used');
    }
    public function flg($id)
    {
        Ticket::where('id','=',$id)->update([
            'flg'=>'1'
        ]);

        $id=Auth::id();
        $cond=['user_id' =>$id, 'flg'=>'1'];
        $tickets = DB::table('tickets')
        ->where($cond)
        ->count();
        // dd($tickets);
        switch($tickets){
            case 3:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=5;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 5:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=6;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;  
            case 10:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=7;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 50:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=8;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            }
        return redirect('coupon/used');
    }

    public function get( $store_id,$coupon_id)
    {
        $dt = new \Carbon\Carbon('now','Asia/Tokyo');
        $id=Auth::id();
        $ticket=new Ticket;
        $ticket->store_id=$store_id;
        $ticket->user_id=$id;
        $ticket->coupon_id=$coupon_id;
        $ticket->term_of_use=$dt->addHour(24);
        $ticket->flg=0;
        $ticket->save();

        $id=Auth::id();
        $cond=['user_id' =>$id];
        $tickets = DB::table('tickets')
        ->where($cond)
        ->count();
        // dd($reviews);
        // $item=['reviews'=>$reviews];
        // return redirect()->action('CouponController@used');

        switch($tickets){
            case 5:
             $id=Auth::id();
            $get=new get;
            $get->badge_id=1;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 20:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=2;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 50:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=3;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 100:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=4;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
        }
        return redirect()->action('CouponController@show');
    }

    public function storeget($store_id,$coupon_id){
    $id=Auth::id();
    $ticket=new Ticket;
    $ticket->store_id=$store_id;
    $ticket->user_id=$id;
    $ticket->coupon_id=$coupon_id;
    $ticket->term_of_use=\Carbon\Carbon::tomorrow();
    $ticket->flg=0;
    $ticket->save();
    return redirect()->route('store/index', ['id' => $store_id]);
}
}
