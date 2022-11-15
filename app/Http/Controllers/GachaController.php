<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function see()
    {
    }

    public function play()
    {$tickets=Ticket::where('user_id','=','2')->get();
        return view('gacha.staging', ['tickets'=>$tickets]);
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
