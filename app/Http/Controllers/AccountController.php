<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Good;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
   
    public function spot(){
        $tickets=Ticket::where('user_id','=','1')->get();
        return view('tourist.index', ['tickets'=>$tickets]);
    }
    public function update(){
        $id=Auth::id();
        $reviews=Review::where('user_id','=',$id)->get();
        return view('review.person', ['reviews'=>$reviews]);

    }
    public function delete(){
        return view('review.edit');
    }
    public function remove(){
        return view('account/remove');
    }
    public function edit($id){
        // return view('review.edit');
        // $reviews =  DB::table('reviews')->find($id);
        $reviews=Review::where('id','=',$id)->get();
        return view('review.edit', ['reviews' => $reviews]);
    }
    public function edited(Request $request){
         //バリデーション
         $validator = Validator::make($request->all(), Review::$rules);
         //バリデーション:エラー
         if ($validator->fails()) {
             return redirect('/')
                 ->withInput()
                 ->withErrors($validator);
         }
         Review::reviewUpdate($request);
         return redirect('/');
    }
    public function show(){
        $goods=Good::where('user_id','=','1')->get();
        return view('review.good',['goods'=>$goods]);
    }
    public function good(){

    }
    public function see(){
        return view('account.index');
    }
    public function review(){
        $reviews=Review::where('user_id','=','2')->get();
        return view('review.person',['reviews'=>$reviews]);

    }
}
