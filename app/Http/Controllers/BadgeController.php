<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Badge;
use App\Get;
use Illuminate\Support\Facades\Auth;

class BadgeController extends Controller
{
    public function see()
    {
        // $gets=Get::orderBy('get_date')->get();
        $id=Auth::id();
        $badges=Get::where('user_id','=',$id)->get();
        return view('badge.index', ['badges'=>$badges]);
    }
    public function get()
    {
      
    }
}
