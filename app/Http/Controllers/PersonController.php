<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Models\User;
use App\Good;
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

        $carbon = new Carbon('2017-01-01 12:30:30');
        echo $carbon->addDays(3) ;

        return view('person.index', ['reviews' => $reviews, 'id' => $id]);
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
