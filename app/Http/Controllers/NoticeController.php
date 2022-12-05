<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function show(){
       
$id=Auth::id();
$cond=['user_id'=>$id,'flg'=>0];
        $notices=Notice::where($cond)->get();
        Notice::where('user_id','=',$id)->update([
            'flg'=>'1'
        ]);
        return view('notice.index', ['notices'=>$notices]);

    }
    
}
