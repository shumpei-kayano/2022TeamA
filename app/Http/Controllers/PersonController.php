<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Models\User;
use App\Good;
use Illuminate\Support\Facades\Auth;

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
        dd($request);
        // $id=Auth::id();
        $good = new Good;
        $good->review_id = $request->id;
        $good->user_id = $id;
        $good->save();
        
        // return redirect()->route('person/home');
        return redirect('person/home');
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

    public function show()
    {
        return view('account.index');
    }
    public function limit()
    {
    }
    public function see()
    {
        return view('person.index');
    }
}
