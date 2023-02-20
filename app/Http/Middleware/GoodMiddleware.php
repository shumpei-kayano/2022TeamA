<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Get;

class GoodMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // ログインユーザーでいいね集計処理
        $id = Auth::user()->id;
        dd($id);
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
                return $next($request);
        }

        // バッジ獲得判定
        $gets=Get::where('user_id', '=', $id)->where('badge_id','=',$badge_id)->first();
            if(isset($gets)){
                return $next($request);
            }else{
                $id = Auth::id();
                $get = new get;
                $get->badge_id = $badge_id;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                return $next($request);
            };

           
         }
    }