<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Coupon;
use Illuminate\Http\Request;

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
            $request->session()->put('current_area', 'oita');
        }

        return view('gacha.index');
    }
    public function change_area(Request $request)
    {
        if ($request->has('oita')) {
            $request->session()->put('current_area', 'oita');
        } elseif ($request->has('beppu')) {
            $request->session()->put('current_area', 'beppu');
        }

        return redirect('gacha/index');
    }
}
