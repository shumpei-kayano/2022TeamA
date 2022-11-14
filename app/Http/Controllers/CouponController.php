<?php

namespace App\Http\Controllers;

use App\Store;
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
        $items = Store::all();
        return view('store.index', ['items' => $items]);
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
