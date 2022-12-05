<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GachaController extends Controller
{
    public function see()
    {
    }

    public function play(Request $request)
    {
        $area = $request->session()->get('current_area');
        if (false !== strpos($area, "oita")) {
            $ransu = mt_rand(1, 13);
        } elseif (false !== strpos($area, 'beppu')) {
            $ransu = mt_rand(14, 23);
        }

        $coupons = Coupon::where('id', '=', $ransu)->first();
        return view('gacha.staging', ['coupons' => $coupons]);
    }

    public function stag()
    {
    }

    public function get()
    {
    }
    public function view()
    {
        return view('gacha.index');
    }
    public function show(Request $request)
    {

        // 存在チェック
        if ($request->session()->has('current_area')) {
            //
        } else {
            $request->session()->put('current_area', '1');

            $reviews = DB::table('stores')
            ->where('area_id','=','1')
            ->count();
            $request->session()->put('area_count', $reviews);
        }

        return view('gacha.index');
    }
    public function change_area(Request $request)
    {
        if ($request->has('oita')) {
            // $request->session()->put('current_area', 'oita');
            // $request->session()->put('area_count', '13');
            // $id=Auth::id();

            $request->session()->put('current_area','大原周辺');

            $reviews = DB::table('stores')
            ->where('area_id','=','1')
            ->count();
            $request->session()->put('area_count', $reviews);
        } elseif ($request->has('beppu')) {
            $request->session()->put('current_area', '別府');
            $request->session()->put('area_count', '10');
        }

        return redirect('gacha/index');
    }
}
