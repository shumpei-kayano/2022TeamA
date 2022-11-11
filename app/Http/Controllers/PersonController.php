<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function out(){

    }
    public function add(){
        return view('person/add');
    }
    public function create(){
        
    }
    public function home(){
        
    }
    public function good(){
        
    }
    public function show(){
        return view('person/show');
    }
    public function limit(){
        
    }
    public function see(){
        return view('person/see');
    }

}
