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
        return view('coupon.index');
    }
    public function caution()
    {
    }
    public function use()
    {
    }
    public function review()
    {
        return view('post.index');
    }
    public function show()
    {
        return view('coupon.index');
    }
    public function store()
    {
        return view('store.index');
    }
    public function used()
    {
        return view('coupon.used');
    }
    public function edit()
    {
        return view('post.index');
    }
}
