<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Review;
use App\Get;
use App\Coupon;
use App\Notice;
use Carbon\Carbon;
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


    public function show()
    {
        $id = Auth::id();
        $cond = ['user_id' => $id, 'flg' => 0];
        $tickets = Ticket::where($cond)->get();
       
        foreach($tickets as$ticket){
        $now=\Carbon\Carbon::now()->format('Y-m-d H:i:s');
        if($now>$ticket->term_of_use){
            Ticket::where('id',"=",$ticket->id)->delete();
        }
        }

        $id = Auth::id();
        $cond = ['user_id' => $id, 'flg' => 0];
        $tickets = Ticket::where($cond)->get();
        $gets = Get::where('user_id', '=', $id)->get();
        $cond = ['user_id' => $id];

       
        return view('coupon.index', ['tickets' => $tickets, 'gets' => $gets]);
    }

    public function used()
    {
        $id = Auth::id();
        $cond = ['user_id' => $id, 'flg' => 1];
        $tickets = Ticket::where($cond)->get();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('coupon.used', ['tickets' => $tickets,'gets'=>$gets]);
    }

    public function store($id)
    {
        $userid = Auth::id();
        $items = DB::table('stores')->find($id);
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('store.index', ['items' => $items,'gets'=>$gets]);
    }

    // 使用可能クーポンからクチコミを書く
    public function view($store_id, $ticket_id)
    {
        $id = Auth::id();
        Ticket::where('id', '=', $ticket_id)->update([
            'flg' => '1'
        ]);
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('post.index', ['store_id' => $store_id, 'id' => $id, 'ticket_id' => $ticket_id,'gets'=>$gets]);
    }

    // 使用済みクーポンからクチコミを書く
    public function review($store_id, $ticket_id)
    {
        $id = Auth::id();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('post.index', ['store_id' => $store_id, 'id' => $id, 'ticket_id' => $ticket_id,'gets'=>$gets]);
    }

    public function edit(Request $request)
    {
        $review = new review;
        $review->user_id = $request->user_id;
        $review->visited = $request->visited;
        $review->comment = $request->review;
        $review->store_id = $request->store_id;
        $review->posted_date = $request->posted_date;
        $review->star = $request->rate;
        $review->ticket_id = $request->ticket_id;
        $review->goodnum = 0;
        $review->save();

        $ticket_id = $request->ticket_id;
        Ticket::where('id', '=', $ticket_id)->update([
            'reviewflg' => '1'
        ]);

        $id = Auth::id();
        $cond = ['user_id' => $id, 'reviewflg' => '1'];
        $reviews = DB::table('tickets')
            ->where($cond)
            ->count();
      
        switch ($reviews) {
            case 1:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 9;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 5:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 10;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 10:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 11;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 50:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 12;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
        }



        return redirect()->action('CouponController@used');
    }
    public function flg($id)
    {
        Ticket::where('id', '=', $id)->update([
            'flg' => '1'
        ]);

        $id = Auth::id();
        $cond = ['user_id' => $id, 'flg' => '1'];
        $tickets = DB::table('tickets')
            ->where($cond)
            ->count();
        switch ($tickets) {
            case 3:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 5;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 5:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 6;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 10:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 7;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 50:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 8;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
        }
        return redirect('coupon/used');
    }

    public function get($store_id, $coupon_id,$areaid)
    {
        $dt = new \Carbon\Carbon('now', 'Asia/Tokyo');
        $id = Auth::id();
        $ticket = new Ticket;
        $ticket->store_id = $store_id;
        $ticket->user_id = $id;
        $ticket->coupon_id = $coupon_id;
        $ticket->term_of_use = $dt->addHour(24);
        $ticket->flg = 0;
        $ticket->area_id=$areaid;
        $ticket->save();

         // 提供数判定
         $coupon=Coupon::find($ticket->coupon_id);
         $ticket=Ticket::where('coupon_id','=',$coupon->id)->count();
        if($coupon->provide<=$ticket){
         Coupon::where('id','=',$coupon->id)->update([
             'provideflg'=>1,
             ]);
        }
         
        $id = Auth::id();
        $cond = ['user_id' => $id];
        $tickets = DB::table('tickets')
            ->where($cond)
            ->count();
      

        switch ($tickets) {
            case 5:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 1;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 20:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 2;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 50:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 3;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 100:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 4;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
        }
        return redirect()->action('CouponController@show');
    }

    public function storeget($store_id, $coupon_id,$areaid)
    {
        $id = Auth::id();
        $ticket = new Ticket;
        $ticket->store_id = $store_id;
        $ticket->user_id = $id;
        $ticket->coupon_id = $coupon_id;
        $ticket->term_of_use = \Carbon\Carbon::tomorrow();
        $ticket->flg = 0;
        $ticket->area_id=$areaid;
        $ticket->save();

         // 提供数判定
         $coupon=Coupon::find($ticket->coupon_id);
         $ticket=Ticket::where('coupon_id','=',$coupon->id)->count();
        if($coupon->provide<=$ticket){
         Coupon::where('id','=',$coupon->id)->update([
             'provideflg'=>1,
             ]);
        }
         
        return redirect()->route('store/index', ['id' => $store_id]);
    }
}
