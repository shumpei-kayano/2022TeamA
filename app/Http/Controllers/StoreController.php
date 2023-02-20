<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use App\Get;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Good;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class StoreController extends Controller
{

    public function new(Request $request)
    {
    //    dd($request);
    $validate_rule = [
        'email' => 'required',
        'password' => 'min:8|required|confirmed'
    ];
    $this -> validate($request, $validate_rule);
        $admin=new Admin;
        $admin->password=Hash::make($request->password);
        $admin->password_confirmation = $request->password_confirmation;
        $admin->email=$request->email;
        $admin->save();

        return view('homeadmin');


        // return Admin::create([
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
