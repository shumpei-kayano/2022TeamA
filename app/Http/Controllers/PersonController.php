<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Models\User;
use App\Good;
use App\Notice;
use App\Ticket;
use App\Get;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function out()
    {
        return view('auth.login');
    }
    public function add()
    {
        return view('auth.register');
    }
    public function create()
    {
        // $reviews=Review::all();
        // $reviews=Review::orderBy('posted_data')->all();
        $id=Auth::id();
        $reviews = Review::orderBy('id', 'desc')->get();
        
        $goods=Good::orderBy('review_id','desc')->where('user_id','=',$id)->get();
        // $gets=Get::where('user_id','=',$id)->get();
        $gets = Get::where('user_id','=',$id)->get();

        
    // dd( $goods);
        // $good = Good::all();

        // 通知

        $cond=['reviews' => $reviews, 'id' => $id,'goods'=>$goods,'gets'=>$gets];
        return view('person.index', $cond);
    }
    public function home()
    {
        return view('person.index');
    }
    public function good(Request $request)
    {

    
        $id=Auth::id();
        $good = new Good;
        $good->review_id = $request->id;
        $good->user_id = $id;
        $good->goodflg=1;
        $good->save();

        Review::where('id','=',$request->id)->increment('goodnum');

        $id=Auth::id();
        // $cond=['user_id' =>$id ];
        $reviews = Review::where('user_id','=',$id )->sum("goodnum");
        // dd($reviews);
        // $item=['reviews'=>$reviews];
        // return redirect()->action('CouponController@used');

        switch($reviews){
            case 1:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=13;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->getflg=0;
            $get->save();
            // $notice = new Notice;
            // $notice->user_id = $id;
            // $notice->	alert_id = 2;
            // $notice->notice=\Carbon\Carbon::today();
            // $notice->flg=0;
            // $notice->save();
            break;
            case 20:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=14;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->getflg=0;
            $get->save();
            // $notice = new Notice;
            // $notice->user_id = $id;
            // $notice->	alert_id = 2;
            // $notice->notice=\Carbon\Carbon::today();
            // $notice->flg=0;
            // $notice->save();
            break;
            case 50:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=15;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->getflg=0;
            $get->save();
            // $notice = new Notice;
            // $notice->user_id = $id;
            // $notice->	alert_id = 2;
            // $notice->notice=\Carbon\Carbon::today();
            // $notice->flg=0;
            // $notice->save();
            break;
            case 100:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=16;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->getflg=0;
            $get->save();
            // $notice = new Notice;
            // $notice->user_id = $id;
            // $notice->	alert_id = 2;
            // $notice->notice=\Carbon\Carbon::today();
            // $notice->flg=0;
            // $notice->save();
            break;
        }
        
        
        
        return redirect()->route('person/home');
        // return redirect('person/wasgood');

        // route('post/used', ['store_id' => $ticket->store_id])
    }
    public function gensan(Request $request)
    {
        $id = $request->good_id;
        $good = Good::where('id', '=', $id);
        $good->delete();
        Review::where('id','=',$request->id)->update(['goodnum' => DB::raw('GREATEST(goodnum-1, 0)')]);
        return redirect()->route('person/home');
    }

    public function wasgood(){
        $reviews = Review::orderBy('posted_date', 'desc')->get();
        $id=Auth::id();
        $goods =DB::table('goods')->get();
        // dd($reviews);
        // $items=['reviews' => $reviews, 'id' => $id,'goods' => $goods];
        return view('person.index', ['reviews' => $reviews, 'id' => $id,'goods' => $goods]);
    }
    public function nogood(Request $request)
    {
        $id = $request->id;
        $good = Good::where('review_id', '=', $id);
        $good->delete();
        dd($good);
        // return redirect()->route('person/home');
        return view('person/home');
    }

    public function show(Request $request)
    {
        $id=Auth::id();
        $cond = ['user_id' =>$id ];
        $users = DB::table('users')->find($id);
        $gets = Get::where('user_id','=',$id)->get();
            return view('account.index', ['users'=>$users,'gets'=>$gets]);

    }
    public function limit()
    {
    }
    public function see()
    {
        return view('person.index');
    }
}
