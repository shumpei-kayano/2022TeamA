<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function watch(){
        return view('admin/watch');
    }
    public function in(){
        return view('admin/in');
    }
    public function enter(){
        
    }
    public function show(){
        return view('admin/show');
    }
    public function edit(){
        return view('admin/edit');
    }
    public function update(){
        
    }
    public function look(){
        return view('admin/look');
    }
    public function see(){
        return view('admin/see');
    }
    public function rewrite(){
        return view('admin/rewrite');
    }
    public function set(){
        
    }
    public function add(){
        return view('admin/add');
    }
    public function create(){
        
    }
    public function view(){
        return view('admin/view');
    }

}
