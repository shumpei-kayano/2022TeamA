<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function see()
    {
    }

    public function play()
    {
        return view('gacha.staging');
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
