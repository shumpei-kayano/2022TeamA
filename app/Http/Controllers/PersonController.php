<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function out(){
        return view('welcome.index');
    }
    public function add(){
        return view('auth.register');
    }
    public function create(){
        
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
