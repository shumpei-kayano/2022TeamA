<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Get;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Good;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountController extends Controller
{
   
    public function spot(){
        $id=Auth::id();
        $tickets=Ticket::where('user_id','=',$id)->get();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('tourist.index', ['tickets'=>$tickets,'gets'=>$gets]);
    }
    public function update(){
        $id=Auth::id();
        $reviews=Review::where('user_id','=',$id)->get();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('review.person', ['reviews'=>$reviews,'gets'=>$gets]);

    }
    public function delete(){
        return view('review.edit');
    }
    
        public function remove($id){
            Review::find($id)->delete();
            return redirect()->action('AccountController@update');
        }
    
    public function edit($id){
        // return view('review.edit');
        // $reviews =  DB::table('reviews')->find($id);
        $reviews=Review::where('id','=',$id)->get();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('review.edit', ['reviews' => $reviews,'gets'=>$gets]);
    }
    public function edited(Request $request){
        //  //バリデーション
        //  $validator = Validator::make($request->all(), Review::$rules);
        //  //バリデーション:エラー
        //  if ($validator->fails()) {
        //      return redirect('/')
        //          ->withInput()
        //          ->withErrors($validator);
        //  }
        //  Review::reviewUpdate($request);
        //  return redirect('/');
        // $reviw->fill($request->all())->save();
        // $review=new review;
        // $review->user_id=3;
        // $review->visited=$request->visited;
        // $review->comment=$request->review;
        // $review->store_id=$request->store_id;
        // $review->posted_date=$request->posted_date;
        // $review->star=$request->manzoku;
        // $review->save();

        Review::where('id','=',$request->id)->update([
        'user_id'=>$request->user_id,
        'visited'=>$request->visited,
        'comment'=>$request->review,
        'store_id'=>$request->store_id,
        'posted_date'=>$request->posted_date,
        'star'=>$request->rate,
        ]);
        return redirect()->action('AccountController@update');
      
    }
    public function show(){
        $id=Auth::id();
        $goods=Good::where('user_id','=',$id)->get();
        // dd($goods);
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('review.good',['goods'=>$goods,'gets'=>$gets]);
    }
    public function good(){

    }
    public function see(){
        return view('account.index');
    }
    public function review(){
        $id=Auth::id();
        $reviews=Review::where('user_id','=',$id)->get();
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
        return view('review.person',['reviews'=>$reviews,'gets'=>$gets]);

    }
    public function set(){
        $id=Auth::id();
        $cond = ['user_id' =>$id ];
        $users = DB::table('users')->find($id);
        $userid = Auth::id();
        $gets = Get::where('user_id', '=', $userid)->get();
            return view('account.setting', ['users'=>$users,'gets'=>$gets]);
    }
    public function setting(Request $request){
        $validate_rule = [
            'newpwd' => 'confirmed',
            'newpwd' => 'min:8',
            'newpwd__confirmation' => 'min:8'
        ];
        $this -> validate($request, $validate_rule);
        $id=Auth::id();
        User::where('id','=',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->newpwd), 
            'icon_photo' => $request->example, 
        ]);
         return redirect()->route('account/index');
    }
}
