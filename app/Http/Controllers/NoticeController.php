<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function show(){
       
$id=Auth::id();
        $notices=Notice::where('user_id','=',$id)->get();
        return view('notice.index', ['notices'=>$notices]);
    }
}
