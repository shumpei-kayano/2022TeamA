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

    public function play($currentArea = 'oita')
    {
        if ($currentArea == "oita") {
            $ransu = mt_rand(1, 13);
        } else if ($currentArea == "beppu") {
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
    public function show()
    {
        return view('gacha.index');
    }
}
