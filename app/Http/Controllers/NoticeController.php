<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    public function show(){
       

        $notices=Notice::where('user_id','=','2')->get();
        return view('notice.index', ['notices'=>$notices]);
    }
}
