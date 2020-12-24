<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $auth = Auth::attempt(['email'=> $email, 'password'=>$password]);

        if($auth){
            return redirect()->route('user.index');
        }else {
            return redirect()->route('login')->with('error','Tên Đăng Nhập hoăc mật khẩu Đúng');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
