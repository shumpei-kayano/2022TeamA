<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function set(){
        return view('account.setting');
    }
    public function spot(){
        return view('tourist.index');
    }
    public function update(){
        return view('review.person');
    }
    public function delete(){
        return view('review.edit');
    }
    public function remove(){
        return view('account/remove');
    }
    public function edit(){
        return view('review.edit');
    }
    public function show(){
        return view('review.good');
    }
    public function good(){

    }
    public function see(){
        return view('account.index');
    }
    public function review(){
        return view('review.person');
    }
}
