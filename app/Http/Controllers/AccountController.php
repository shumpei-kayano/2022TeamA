<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function set(){
        return view('account/set');
    }
    public function spot(){
        return view('account/spot');
    }
    public function update(){
        return view('account/update');
    }
    public function delete(){
        return view('account/delete');
    }
    public function remove(){
        return view('account/remove');
    }
    public function edit(){
        return view('account/edit');
    }
    public function show(){
        return view('account/show');
    }
    public function good(){

    }
}
