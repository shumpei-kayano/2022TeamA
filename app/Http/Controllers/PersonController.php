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
        return view('person.index', ['reviews' => $reviews, 'id' => $id]);
    }
    public function home()
    {
        return view('person.index');
    }
    public function good(Request $request)
    {
        // dd($request->id);
        $id=Auth::id();
        $good = new Good;
        $good->review_id = $request->id;
        $good->user_id = $id;
        $good->goodflg=1;
        $good->save();
        
        
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
