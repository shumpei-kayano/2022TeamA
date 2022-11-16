<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\User;

class PersonController extends Controller
{
    public function out(){
        return view('welcome.index');
    }
    public function add(){
        return view('person.add');
    }
    public function create(){
        // $reviews=Review::all();
        // $reviews=Review::orderBy('posted_data')->all();
        $reviews = Review::orderBy('posted_date','desc')->get();
        return view('person.index',['reviews'=>$reviews]);
    }
    public function home(){
        return view('person.index');
    }
    public function good(){
        
    }
    public function show(){
        return view('account.index');
    }
    public function limit(){
        
    }
    public function see(){
        return view('person.index');
    }

}
