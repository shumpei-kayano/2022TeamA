<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $stores = DB::table('stores')->get();
        return view('coupon.index', compact('stores'));
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
