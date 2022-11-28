<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Badge;
use App\Get;


class BadgeController extends Controller
{
    public function see()
    {
        // $gets=Get::orderBy('get_date')->get();
        $badges= Get::all();
        return view('badge.index', ['badges'=>$badges]);
    }
    public function get()
    {
      
    }
}
