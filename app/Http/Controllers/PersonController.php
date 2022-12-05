<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Models\User;
use App\Good;
use App\Notice;
use App\Ticket;
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
        $reviews = Review::orderBy('posted_date', 'desc')->get();
        // $good = Good::all();
        // dd($good);
        $id=Auth::id();
        $item = ['user_id' =>$id , 'flg' =>0];
        $tickets=Ticket::where($item)->get();
        foreach($tickets as $ticket){
        $get_date=\Carbon\Carbon::now()->format('Y/m/d H:i:s');
        // $carbon = new \Carbon\Carbon();
        // $carbon3=$carbon->subHours(3)->format('Y/m/d H:i:s');
        // dd($carbon3,$get_date);
        // dd($get_date);
        //dd($tickets->term_of_use);
        $first = new Carbon( $ticket->term_of_use);
        // dd($first);
        //$first = new Carbon( $get_date);
        $second = new Carbon( $get_date);
        $sabun= $first->diffInHours($second); 
        // dd($tickets->term_of_use,$get_date,$sabun);
        // dd(date('Y/m/d H:i:s',strtotime($get_date-$carbon3)));
        if($sabun<=3){
            // $notices=Notice::where('alert_id','=','1')->get();
            $id=Auth::id();
            $notice = new Notice;
            $notice->user_id = $id;
            $notice->	alert_id = 1;
            $notice->notice=$get_date;
            $notice->flg=0;
            $notice->save();
        }
    };
        $cond=['reviews' => $reviews, 'id' => $id];
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
            $get->save();
            break;
            case 20:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=14;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 50:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=15;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
            case 100:
            $id=Auth::id();
            $get=new get;
            $get->badge_id=16;
            $get->user_id=$id;
            $get->get_date=\Carbon\Carbon::today();
            $get->save();
            break;
        }
        
        
        return redirect()->route('person/home');
        // return redirect('person/wasgood');

        // route('post/used', ['store_id' => $ticket->store_id])
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
            return view('account.index', ['users'=>$users]);

    }
    public function limit()
    {
    }
    public function see()
    {
        return view('person.index');
    }
}
