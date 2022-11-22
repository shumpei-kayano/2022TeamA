<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\User;
use App\Good;

class PersonController extends Controller
{
    public function out(){
        return view('login');
    }
    public function add(){
        return view('auth.register');
    }
    public function create(){
        // $reviews=Review::all();
        // $reviews=Review::orderBy('posted_data')->all();
        $reviews = Review::orderBy('posted_date','desc')->get();
        $good = Good::all();
        // dd($good);
        return view('person.index',['reviews'=>$reviews, 'good'=>$good]);
    }
    public function home(){
        return view('person.index');
    }
    public function unko(Request $request){
        $good=new Good;
        $good->review_id=$request->id;
        $good->user_id=3;
        $good->save();
        dd($good);
        // return redirect()->route('person/home');
        return view('person/home');
    }

    public function nogood(Request $request){
        $id = $request->id;
        $good = Good::where('review_id', '=', $id);
        $good->delete();
        dd($good);
        // return redirect()->route('person/home');
        return view('person/home');
    }

    public function show(){
        return view('account.index');
    }
    public function limit(){
        
    }
    public function see(){
        return view('person.index');
    }

}
