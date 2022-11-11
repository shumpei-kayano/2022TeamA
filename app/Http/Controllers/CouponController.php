<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function get()
    {
    }
    public function see()
    {
        return view('coupon/see');
    }
    public function caution()
    {
    }
    public function use()
    {
    }
    public function review()
    {
        return view('coupon/view');
    }
    public function show()
    {
        return view('coupon/show');
    }
}
