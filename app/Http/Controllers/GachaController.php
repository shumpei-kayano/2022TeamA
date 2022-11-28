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

    public function play()
    {
        $msg = "大分";
        if ($msg == "大分") {
            $erea = 1;
        } else if ($msg == "別府") {
            $erea = 2;
        }

        if ($erea == 1) {
            $ransu = mt_rand(1, 13);
        } else if ($erea == 2) {
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
