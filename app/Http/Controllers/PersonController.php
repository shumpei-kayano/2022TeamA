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
use Illuminate\Support\Facades\Hash;

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
    public function create(Request $request)
    {
        $id = Auth::id();
        $reviews = Review::orderBy('id', 'desc')->get();
        $goods = Good::orderBy('review_id', 'desc')->where('user_id', '=', $id)->get();
        $gets = Get::where('user_id', '=', $id)->get();
        $cond = ['user_id' => $id];
        $cond = ['reviews' => $reviews, 'id' => $id, 'goods' => $goods, 'gets' => $gets];
        $request->session()->put('current_area', 'oita');
        $store1=Store::where('area_id','=','1')->count();
        $request->session()->put('area_count', $store1);
        return view('person.index', $cond);
    }
    public function home()
    {
        return view('person.index');
    }
    public function good(Request $request)
    {


        $id = Auth::id();
        $good = new Good;
        $good->review_id = $request->id;
        $good->user_id = $id;
        $good->goodflg = 1;
        $good->save();

        Review::where('id', '=', $request->id)->increment('goodnum');
    
        return redirect()->route('person/home');
       
    }
    public function gensan(Request $request)
    {
        $id = $request->good_id;
        $good = Good::where('id', '=', $id);
        $good->delete();
        Review::where('id', '=', $request->id)->update(['goodnum' => DB::raw('GREATEST(goodnum-1, 0)')]);
        return redirect()->route('person/home');
    }

    public function wasgood()
    {
        $reviews = Review::orderBy('posted_date', 'desc')->get();
        $id = Auth::id();
        $goods = DB::table('goods')->get();
        
        return view('person.index', ['reviews' => $reviews, 'id' => $id, 'goods' => $goods]);
    }
    public function nogood(Request $request)
    {
        $id = $request->id;
        $good = Good::where('review_id', '=', $id);
        $good->delete();
        dd($good);
        
        return view('person/home');
    }

    public function show(Request $request)
    {
        $id = Auth::id();
        $cond = ['user_id' => $id];
        $users = DB::table('users')->find($id);
        $gets = Get::where('user_id', '=', $id)->get();
        $cond = ['user_id' => $id];
        
        return view('account.index', ['users' => $users, 'gets' => $gets]);
    }
    public function limit()
    {
    }
    public function see()
    {
        return view('person.index');
    }

    public function userRegister(Request $request)
    {
        // dd($request);
        $validate_rule = [
            'email' => 'required',
            'name' => 'required',
            'password' => 'min:8|required|confirmed'
        ];
        $this -> validate($request, $validate_rule);
        $file=$request->file('example');
            if(!empty($file)){
                $filename=$file->getClientOriginalName();
                $move=$file->move('./upload/',$filename);
            }else{
                $filename="";
            }
            $user = new user;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->password_confirmation = $request->password_confirmation;
            $user->icon_photo = $filename;
            $user->save();
        return view('home');
    }
}
