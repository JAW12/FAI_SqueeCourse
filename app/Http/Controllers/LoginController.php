<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function adminLoginPage(){
        if(Session::has('admin')){
            return redirect()->route('admin.home');
        }
        else{
            return view('auth.admin.login');
        }
    }

    public function forgotPage(){
        return view('auth.forgotpassword');
    }

    public function resetPage(){
        return view('auth.resetpassword');
    }

    public function login(Request $request) {
        $input = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $remember = $request->remember;

        if (Auth::attempt($request->only(["username", "password"]), $remember)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with("error", "Login failed");
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return \redirect()->route('home');
    }
}
