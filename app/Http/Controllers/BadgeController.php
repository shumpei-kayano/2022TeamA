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
        $id = Auth::id();
        $badges = Get::where('user_id', '=', $id)->get();
        $gets = Get::where('user_id', '=', $id)->get();
        Get::where('user_id', '=', $id)->update([
            'getflg' => '1'
        ]);
        return view('badge.index', ['badges' => $badges, 'gets' => $gets]);
    }
    public function get()
    {
    }
}
