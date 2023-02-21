<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Badge;
use App\Get;
use App\Review;
use Illuminate\Support\Facades\Auth;

class BadgeController extends Controller
{
    public function see()
    {
                // ログインユーザーでいいね集計処理
                $id = Auth::id();
                $reviews = Review::where('user_id', '=', $id)->sum("goodnum");
                switch ($reviews) {
                    case 1:
                        $badge_id = 13;
                        break;
                    case 20:
                        $badge_id = 14;
                        break;
                    case 50:
                        $badge_id = 15;
                        break;
                    case 100:
                        $badge_id = 16;
                        break;
                    default:
                    $badges = Get::where('user_id', '=', $id)->get();
                    Get::where('user_id', '=', $id)->update([
                        // getflgはバッジの既読（１）
                        'getflg' => '1'
                    ]);
                    return view('badge.index', ['badges' => $badges]);
                }
        
                // バッジ獲得判定
                $gets=Get::where('user_id', '=', $id)->where('badge_id','=',$badge_id)->first();
                    if(isset($gets)){
                        $badges = Get::where('user_id', '=', $id)->get();
                        return view('badge.index', ['badges' => $badges]);
                    }else{
                        $id = Auth::id();
                        $get = new get;
                        $get->badge_id = $badge_id;
                        $get->user_id = $id;
                        $get->get_date = \Carbon\Carbon::today();
                        $get->getflg = 0;
                        $get->save();
                       
                    }
        

        $id = Auth::id();
        $badges = Get::where('user_id', '=', $id)->get();
        Get::where('user_id', '=', $id)->update([
            // getflgはバッジの既読（１）
            'getflg' => '1'
        ]);
        return view('badge.index', ['badges' => $badges]);
    }
    public function get()
    {
    }
}
