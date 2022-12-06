<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;
use App\Models\Admin;

    
    class AdminLoginController extends Controller
    {

        public function __construct()
        {
            $this->middleware('guest:admin')->except('logout');
        }
    
        public function showAdminLoginForm()
        {
            return view('admins.login');
        }
    
        public function adminlogin(Request $request)
        {
            // dd($request);
            // 送られてきてはいる
            // ログイン時のバリデーション
            $request->validate([
                'name' => 'required|email',
                'password' => 'required|string',
            ]);
    
            if (Auth::guard('admin')->attempt(['email' => $request->name, 'password' => $request->password], $request->remember)) {
                // ログインが成功したとき
                return redirect()->intended(route('admins.store'));
            }
    
            // ログインが失敗したとき
            return $this->sendFailedLoginResponse($request);
        }
    
        protected function sendFailedLoginResponse(Request $request)
        {
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
            ]);
        }
    
        public function username()
        {
            return 'email';
        }
    
        public function logout()
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
}
